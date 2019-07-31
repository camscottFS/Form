<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
  public function index(Request $request)
  {
    dd(request()->all());
    $data = request()->validate([
      'name' => 'required',
      'birthdate' => 'required|date',
      'rate' => 'required|numeric',
      'sundaystart' => 'required',
      'sundayend' => 'required',
      'mondaystart' => 'required',
      'mondayend' => 'required',
      'tuesdaystart' => 'required',
      'tuesdayend' => 'required',
      'wednesdaystart' => 'required',
      'wednesdayend' => 'required',
      'thursdaystart' => 'required',
      'thursdayend' => 'required',
      'fridaystart' => 'required',
      'fridayend' => 'required',
      'saturdaystart' => 'required',
      'saturdayend' => 'required',
      'phone' => 'required|regex:/(01)[0-9]{9}/',
      'email' => 'required|email',
    ]);

    return view('success.index');
  }
}
