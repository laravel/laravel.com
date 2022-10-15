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
		
        return view('og-image', [
            'page' => $page,
	        'version' => DEFAULT_VERSION,
        ]);
    }
}
