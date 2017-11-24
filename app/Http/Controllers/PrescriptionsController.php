<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;
use Carbon\Carbon;
use App\Drug;
use App\Patient;

class PrescriptionsController extends Controller
{
  public function index(){
    $prescriptions = Prescription::all();
    return view('prescriptions.index', compact('prescriptions'));
  }

  public function create(){
    return view('prescriptions.form');
  }

  public function editByName($name){
    $drug = Drug::find($name);
    return view('prescriptions.form', compact('drug'));
  }

  public function editByCode($id){
    $patient = Patient::find($id);
    return view('prescriptions.form', compact('patient'));
  }
  //
  public function store(Request $request){
    // $user_id = Auth::user()->id;
    $prescription = new Prescription;
    $prescription->p_code = $request->p_code;
    $prescription->name = $request->name;
    $prescription->surname = $request->surname;
    $prescription->address = $request->address;
    $prescription->drug = $request->drug;
    $prescription->p_date = Carbon::now()->format('Y-m-d');
    $prescription->p_valid = $request->p_valid;
    $prescription->d_name = $request->d_name;
    $prescription->d_surname = $request->d_surname;
    $prescription->d_phone = $request->d_phone;
    // $patient->user_id = $user_id;
    $prescription->save();

    return redirect()->route('prescriptions');
  }


  public function show($id){

  }

  public function edit($id){

  }

  public function update($id){

  }
}
