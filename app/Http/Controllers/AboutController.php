<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function about()
  {
      return view('admin.about', [
          'nama' => 'Jason Timothy Wibowo',
          'panggilan' => 'Timothy',
          'github' => 'https://github.com/timothyjason208-ai'
      ]);
  }
}
