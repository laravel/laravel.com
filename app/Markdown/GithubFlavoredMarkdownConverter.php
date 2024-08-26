<?php

namespace App\Markdown;

use Laravel\Unfenced\UnfencedExtension;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Environment\EnvironmentInterface;
use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Extension\Attributes\AttributesExtension;
use League\CommonMark\Extension\Autolink\AutolinkExtension;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\CommonMark\Node\Block\BlockQuote;
use League\CommonMark\Extension\Strikethrough\StrikethroughExtension;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\Extension\TaskList\TaskListExtension;
use League\CommonMark\MarkdownConverter;
use Torchlight\Commonmark\V2\TorchlightExtension;

/**
 * Converts GitHub Flavored Markdown to HTML.
 */
class GithubFlavoredMarkdownConverter extends MarkdownConverter
{
    /**
     * Create a new Markdown converter pre-configured for GFM
     *
     * @param array<string, mixed> $config
     */
    public function __construct(array $config = [])
    {
        $environment = new Environment($config);
        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new AutolinkExtension());
        $environment->addExtension(new StrikethroughExtension());
        $environment->addExtension(new TableExtension());
        $environment->addExtension(new TaskListExtension());
        $environment->addExtension(new UnfencedExtension());
        $environment->addExtension(new AttributesExtension());
        $environment->addExtension(new TorchlightExtension());

        $environment->addRenderer(BlockQuote::class, new BlockQuoteRenderer());


        $environment->addEventListener(DocumentParsedEvent::class, new ConfigureHeadingLinks);

        parent::__construct($environment);
    }

    public function getEnvironment(): EnvironmentInterface
    {
        \assert($this->environment instanceof EnvironmentInterface);

        return $this->environment;
    }
}
