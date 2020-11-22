<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function get_form()
    {
        return view('report_form');
    }

    public function engine_form()
    {
        return view('engine_form');
    }
}
