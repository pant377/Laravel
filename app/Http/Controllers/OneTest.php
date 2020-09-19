<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneTest extends Controller
{
    public function test(){
        return view('pages.testing');
    }
    public function fine(){
        return view('pages.nibba');
    }
}
