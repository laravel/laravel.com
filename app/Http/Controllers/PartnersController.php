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
        $featured = ['tighten', 'vehikl', 'devsquad', '64robots'];

        shuffle($featured);

        return view('partners', [
            'featured' => $featured[0],
            'otherPartners' => array_slice($featured, 1),
        ]);
    }

    /**
     * Show a parnter page.
     *
     * @param string $partner
     * @return \Illuminate\View\View|void
     */
    public function show($partner)
    {
        $view = "partners.{$partner}";

        return view()->exists($view) ? view($view) : abort(404);
    }
}
