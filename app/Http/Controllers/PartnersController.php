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
        return view('partners.'.$partner);
    }
}
