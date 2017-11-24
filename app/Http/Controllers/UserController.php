<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

// class UsersController extends Controller
// {
//   public function index{
//     $users = User::all();
//     $count = $users->count();
//     return view('users/index', compact('users', 'count'));
//   }
//
//   public function edit($id){
//     $user = User::find($id);
//     return view('users/form', compact ('user'));
//   }
//
//   public function update(Request $request, $id){
//     $user = User::find($id);
//     $user->name = $request->name;
//     $user->surname = $request->surname;
//     $user->l_number = $request->l_number;
//     $user->l_date = $request->l_date;
//     $user->update();
//
//     return redirect()->route('usersList');
//
//   }
//
//   public function delete(Request $request, $id){
//     $user = User::find($id);
//     $user->delete();
//     return redirect()->route('usersList');
//   }
//
//
// }
