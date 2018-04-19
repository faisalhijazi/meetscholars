<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

    /**
    *
    * Prototype Home page
    *
    */


    public function index() {
      return view('index');
    }




}
