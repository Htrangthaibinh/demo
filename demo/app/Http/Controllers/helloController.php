<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public $ten='trang';
    public $hinhdang=0;
    public function vietcode(){
        return view('home',['ten'=>$this ->ten]);
    }
}
