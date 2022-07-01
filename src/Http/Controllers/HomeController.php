<?php

namespace Auncly\Binoculars\Http\Controllers;

use Auncly\Binoculars\Binoculars;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    
    /**
     * @return mixed
     */
    public function index()
    {
        return view('binoculars::layout', ['binocularsScriptVariables' => Binoculars::scriptVariables()]);
    }
}