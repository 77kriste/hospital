<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drug;

use Carbon\Carbon;

class DrugsController extends Controller
{
  public function index(){
    $drugs = Drug::all();
    $count = $drugs->count();
    return view('drugs.index', compact('drugs', 'count'));
  }

  public function create(){
    return view('drugs.form');
  }
  //
  public function store(Request $request){
    // $user_id = Auth::user()->id;
    $drug = new Drug;
    $drug->name = $request->name;
    $drug->r_date = Carbon::now()->format('Y-m-d');
    // $drug->user_id = $user_id;
    $drug->save();

    return redirect()->route('drugs');
  }


  public function show($id){

  }

  public function edit($id){

  }

  public function update($id){

  }

  public function delete(Request $request, $id){
    $drug = Drug::find($id);
    $drug->delete();

    return redirect()->route('drugs');

  }

}
