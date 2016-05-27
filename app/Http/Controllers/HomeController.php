<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
  public function __construct()
  {
    //parent::__construct();
    $this->middleware('old');
  }

  public function index()
  {
    return view('home');
  }
}
