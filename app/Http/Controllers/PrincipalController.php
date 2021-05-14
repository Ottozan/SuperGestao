<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    // Action principal ou
    public function principal() {
        return view('site.principal');
    }
}
