<?php

namespace  App\Http\Controllers;
use App\Http\Controllers\Controller;
/**
 *
 */
class MovieController extends Controller
{

  function __construct()
  {
    # code..
  }

   public function index()
  {
    return 'Hello from Movie Controller';
  }

 public function view()
 {
    return "Hello viewmovie";
 }

}
