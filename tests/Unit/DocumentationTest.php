<?php

namespace Tests\Unit;

use App\Documentation;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class DocumentationTest extends TestCase
{
    /** @test */
    public function it_gets_documentation_page_for_given_version()
    {
        File::shouldReceive('get')
            ->once()
            ->with(resource_path('docs/5.8/example.md'))
            ->andReturn('# Laravel Framework');

        File::shouldReceive('exists')
            ->once()
            ->andReturn(true);

        $content = app(Documentation::class)->get('5.8', 'example');

        $this->assertEquals('<h1>Laravel Framework</h1>', $content);
    }

    /** @test */
    public function it_replaces_version_placeholders()
    {
        $this->assertEquals(
            'https://laravel.com/docs/7.x/csrf',
            Documentation::replaceLinks('7.x', "https://laravel.com/docs/{{version}}/csrf")
        );
    }

    /** @test */
    public function it_detects_doc_markdown_path()
    {
        $this->assertEquals(
            base_path('resources/docs/7.x/example.md'),
            Documentation::markdownPath('7.x', 'example')
        );
    }
}
