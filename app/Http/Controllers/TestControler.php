<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControler extends Controller
{
    public function test(){
        return view('pages.testing');
    }
}
