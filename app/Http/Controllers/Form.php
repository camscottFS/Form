<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
  public function index()
  {
    $data = request()->validate([
      'name' => 'required',
      'birthdate' => 'required|date',
      'rate' => 'required',
      'availability' => 'required',
      'phone' => 'required',
      'email' => 'required|email'
    ]);
  }
}
