<?php

namespace Tests\Feature;

use App\Documentation;
use Mockery;
use Tests\TestCase;

class DocumentTest extends TestCase
{
    /** @test */
    public function it_redirects_to_default_version()
    {
        $this->get('/docs')
            ->assertRedirect('/docs/'.DEFAULT_VERSION);
    }

    /** @test */
    public function it_redirects_invalid_versions()
    {
        $this->get('/docs/routing')
            ->assertStatus(301)
            ->assertRedirect('/docs/'.DEFAULT_VERSION.'/routing');
    }

    /** @test */
    public function it_defines_current_version_global_variable()
    {
        $this->get('/docs/8.x');

        $this->assertEquals('8.x', CURRENT_VERSION);
    }

    /** @test */
    public function it_loads_and_parses_markdown_documentation_page()
    {
        $mock = Mockery::mock('App\Documentation[markdownPath]', [
            resolve('Illuminate\Filesystem\Filesystem'),
            resolve('Illuminate\Contracts\Cache\Repository')
        ]);

        $mock->shouldReceive('markdownPath')
            ->andReturn(base_path('tests/Stubs/stub.md'));

        $this->instance(Documentation::class, $mock);

        $this->get('/docs/8.x/stub')
            ->assertSee('<h1>Laravel Framework</h1>', false);
    }
}
