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
    ]);

    Mail::to('cameron@camscott.me')->send(new FormMail($data));

    return redirect('/')->with('success', 'Message sent successfully!');
  }
}
