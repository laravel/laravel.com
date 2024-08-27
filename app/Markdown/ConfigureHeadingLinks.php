<?php

namespace App\Markdown;

use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use League\CommonMark\Extension\CommonMark\Node\Inline\HtmlInline;
use League\CommonMark\Node\Block\Paragraph;

class ConfigureHeadingLinks
{
    public function __invoke(DocumentParsedEvent $documentParsedEvent): void
    {
        $walker = $documentParsedEvent->getDocument()->walker();

        while ($event = $walker->next()) {
            [$paragraph, $heading, $linkOpener, $linkCloser] = [
                $event->getNode(),
                $event->getNode()->next(),
                $event->getNode()->firstChild(),
                $event->getNode()->lastChild(),
            ];

            if (
                ! $heading instanceof Heading ||
                ! $paragraph instanceof Paragraph ||
                count($paragraph->children()) !== 2 ||
                ! $linkOpener instanceof HtmlInline ||
                ! $linkCloser instanceof HtmlInline ||
                ! str_starts_with($linkOpener->getLiteral(), '<a name="') ||
                ! str_ends_with($linkOpener->getLiteral(), '">') ||
                substr_count($linkOpener->getLiteral(), '"') !== 2 ||
                $paragraph->firstChild()->next() !== $paragraph->lastChild() ||
                ! str_starts_with($linkCloser->getLiteral(), '</a>')
            ) {
                continue;
            }

            $link = str($linkOpener->getLiteral())->after('<a name="')->beforeLast('">')->toString();

            $heading->data->set('attributes.id', $link);
            $heading->prependChild(new HtmlInline('<a href="#'.$link.'">'));
            $heading->appendChild(new HtmlInline('</a>'));

            $paragraph->detach();

            $walker->resumeAt($heading->next());
        }
    }
}
