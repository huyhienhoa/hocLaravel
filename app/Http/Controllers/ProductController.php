<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class ProductController extends Controller
{
    public function products(){
        $arr = [
            '1' => ['2','Huy Hien Hoa','5','1000'],
            '2' => ['3','Huy Pham','5','1000'],
            '3' => ['3','Ho Quang Hieu','5','1000'],
        ];
        
        return view("sanpham")->with("array",$arr);
    }
}
