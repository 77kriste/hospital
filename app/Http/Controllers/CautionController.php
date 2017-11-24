<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Caution;


class CautionController extends Controller
{
  public function index(){
    return view('cautions.index');
  }
}
