<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function sobre_controller() {
        return view('site.sobre');
    }

}
