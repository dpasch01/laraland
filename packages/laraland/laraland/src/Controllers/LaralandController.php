<?php

namespace Laraland\Laraland\Controllers;

use Illuminate\Http\Request;
use laraland\Http\Requests;
use laraland\Http\Controllers\Controller;

class LaralandController extends Controller{

  public function index(){
    echo 'Hello from laraland.';
  }

}
