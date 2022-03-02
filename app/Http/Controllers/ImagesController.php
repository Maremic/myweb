<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function cats(){
        $images = 'cats';
        return view('gallery')->withImages('cats');
    }

    public function works(){
        $images = 'works';
        return view('gallery')->withImages('works');
    }
}
