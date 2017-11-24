<?php

namespace App\Http\Controllers;

// use Auth;
use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests\Patient_validation;

class PatientsController extends Controller
{
    public function index(){
      $patients = Patient::all();
      $count = $patients->count();
      return view('patients.index', compact('patients', 'count'));
    }

    public function create(){
      return view('patients.form');
    }
    //
    public function store(Request $request){
      // $user_id = Auth::user()->id;
      $patient = new Patient;
      $patient->p_code = $request->p_code;
      $patient->name = $request->name;
      $patient->surname = $request->surname;
      $patient->address = $request->address;
      // $patient->user_id = $user_id;
      $patient->save();

      return redirect()->route('patients');
    }


    public function show($id){

    }

    public function edit($id){
      $patient = Patient::find($id);
      return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id){
      $patient = Patient::find($id);
      $patient->p_code = $request->p_code;
      $patient->name = $request->name;
      $patient->surname = $request->surname;
      $patient->address = $request->address;
      $patient->update();

      return redirect()->route('patients');
    }

    public function delete(Request $request, $id){
      $patient = Patient::find($id);
      $patient->delete();

      return redirect()->route('patients');

    }

}
