<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class StaticContentController extends Controller
{
    /**
     * @return View
     */
    public function showLanding() :View
    {
        return view('forms.signup.landing');
    }
}
