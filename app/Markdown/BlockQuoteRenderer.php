<?php

namespace App\Markdown;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Str;
use League\CommonMark\Extension\CommonMark\Renderer\Block\BlockQuoteRenderer as BaseBlockQuoteRenderer;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;
use League\CommonMark\Util\HtmlElement;

class BlockQuoteRenderer implements NodeRendererInterface
{
    /**
     * @return \Stringable|string|null
     */
    public function render(Node $node, ChildNodeRendererInterface $childRenderer)
    {
        $element = (new BaseBlockQuoteRenderer($node))->render($node, $childRenderer);

        if (
            ! $element instanceof HtmlElement ||
            $element->getTagName() !== 'blockquote'
        ) {
            return $element;
        }

        $html = trim($element->getContents(true));

        if (! str_starts_with($html, '<p>')) {
            return $element;
        }

        $paragraphPartial = Str::after($html, '<p>');

        if (preg_match('/^\[!(NOTE|WARNING)\](?:<br \/>)?/', $paragraphPartial, $matches) === 1) {
            // GitHub styled notes, e.g.,
            // > [!NOTE] Content
            // or
            // > [!NOTE]
            // > Content

            [$asset, $class] = match ($matches[1]) {
                'WARNING' => [Vite::content('resources/images/exclamation.svg'), 'bg-red-600'],
                'NOTE' => [Vite::content('resources/images/lightbulb.svg'), 'bg-purple-600'],
            };
        } elseif (preg_match('/^<strong>(Note|Warning):?<\/strong>:?(?:<br \/>)?/', $paragraphPartial, $matches) === 1) {
            // Legacy GitHub styled notes, e.g.,
            // > **Note:** Content
            // or
            // > **Note**: Content
            // or
            // > **Note** Content
            // or
            // > **Note:**
            // > Content
            // or
            // > **Note**:
            // > Content
            // or
            // > **Note**
            // > Content

            [$asset, $class] = match ($matches[1]) {
                'Warning' => [Vite::content('resources/images/exclamation.svg'), 'bg-red-600'],
                'Note' => [Vite::content('resources/images/lightbulb.svg'), 'bg-purple-600'],
            };
        } elseif (preg_match('/^\{(note|tip|video)\}/', $paragraphPartial, $matches) === 1) {
            // Legacy Laravel styled notes, e.g.,
            // > {tip} Content

            [$asset, $class] = match ($matches[1]) {
                'note' => [Vite::content('resources/images/exclamation.svg'), 'bg-red-600'],
                'tip'  => [Vite::content('resources/images/lightbulb.svg'), 'bg-purple-600'],
                'video' => [Vite::content('resources/images/laracast.svg'), 'bg-blue-600'],
            };
        } else {
            return $element;
        }

        $paragraphPartial = str_replace($matches[0], '', $paragraphPartial);

        return <<<HTML
            <div class="mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg lg:flex lg:items-center callout">
                <div class="w-20 h-20 mb-6 flex items-center justify-center shrink-0 lg:mb-0 {$class}">
                    <div class="opacity-75">{$asset}</div>
                </div>
                <p class="mb-0 lg:ml-6 callout">{$paragraphPartial}
            </div>
            HTML;
    }
}
