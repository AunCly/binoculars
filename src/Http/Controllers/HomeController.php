<?php

namespace Auncly\Binoculars\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    
    /**
     * @return mixed
     */
    public function index()
    {
        return view('binoculars::layout');
    }
}