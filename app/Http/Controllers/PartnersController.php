<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Show a documentation page.
     *
     * @return Response
     */
    public function index()
    {
        $featured = ['tighten', 'vehikl', 'devsquad'];
        $pick = array_rand($featured);

        $featuredPartner = $featured[$pick];

        unset($featured[$pick]);

        shuffle($featured);

        return view('partners', [
            'featured' => $featuredPartner,
            'otherPartners' => $featured,
        ]);
    }

    /**
     * Show a documentation page.
     *
     * @return Response
     */
    public function show($partner)
    {
        $view = 'partners.'.$partner;

        return view()->exists($view) ? view($view) : abort(404);
    }
}
