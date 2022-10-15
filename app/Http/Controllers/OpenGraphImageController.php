<?php

namespace App\Http\Controllers;

use App\Documentation;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class OpenGraphImageController extends Controller
{
    public function __invoke(Documentation $docs, $page)
    {
        if (!$page = $docs->get(DEFAULT_VERSION, $page)) {
			return 'No such page';
        }
		
		config()->set('torchlight.options.lineNumbers', true);
		config()->set('torchlight.options.lineNumbersStyle', 'margin-right: 24px; opacity: 50%;');
		
        return view('og-image', [
            'page' => $page,
	        'version' => DEFAULT_VERSION,
        ]);
    }
}
