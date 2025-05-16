<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function frontPage(){
        return view('portfolio.frontpage');
    }
}
