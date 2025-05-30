<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalarySurveyController extends Controller
{
    public function salarySurveyFrontPage()
    {
        $results = false;
        return view('portfolio.salarySurvey',compact('results'));
    }
}
