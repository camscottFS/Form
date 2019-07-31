<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Form extends Controller
{
  public function index(Request $request)
  {
    // verify data received
    //dd(request()->all());

    // validate the data
    $data = request()->validate([
      'name' => 'required',
      'birthdate' => 'required|date',
      'rate' => 'required|numeric',
      'phone' => 'required',
      'email' => 'required|email',
    ]);

    Mail::to('cameron@camscott.me')->send(new FormMail());

    // return success view
    return view('success.index');
  }
}
