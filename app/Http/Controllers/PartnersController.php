<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Show the partners index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $featured = ['tighten', 'vehikl', 'devsquad', '64robots', 'byte5'];
        $featured = ['byte5'];

        shuffle($featured);

        return view('partners', [
            'featured' => $featured[0],
            'otherPartners' => array_slice($featured, 1),
        ]);
    }

    /**
     * Show a parnter page.
     *
     * @return \Illuminate\View\View
     */
    public function show($partner)
    {
        $view = 'partners.'.$partner;

        return view()->exists($view) ? view($view) : abort(404);
    }
}
