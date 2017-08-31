<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getFirst(){
        return "this is First Action";
    }

    public function test(){
        return "Tìm hiểu về Controller trong Laravel";
    }
}
