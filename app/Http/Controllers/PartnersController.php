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
        $featured = ['tighten', 'vehikl'];

        return view('partners', [
            'featured' => $featured[array_rand($featured)]
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
