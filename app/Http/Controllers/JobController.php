<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Job;



class JobController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


  public function index()
  {
      return view('jobs.index');
  }




}
