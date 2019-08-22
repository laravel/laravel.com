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
        return view('partners');
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
