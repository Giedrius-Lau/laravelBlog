<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class PagesController extends Controller{

  public function index(){

  if(View::exists('pages.index'))
      return view('pages.index')
              ->with('text', '<b>Laravel</b>')
              ->with('name', 'Nicole')
              ->with(['location' => 'Europe', 'planet' => 'Earth']);
      else
        return 'No view available';

  }
  public function profile(){

    return view('pages.profile');
  }
}

?>