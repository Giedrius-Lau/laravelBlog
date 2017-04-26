<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {

            $users = [
              '0' => [
                'first_name' => 'Giedrius',
                'last_name' => 'Lauruska',
                'location' => 'Lietuva'
              ],
              '1' => [
                'first_name' => 'Viktoria',
                'last_name' => 'Kriuckovaite',
                'location' => 'Lietuva'
              ]
            ];
          return $users;

    }
    public function create(){
      return view('admin.users.create');
    }
    public function store(Request $request){
      User::create($request->all());
      return 'success';
      return $request->all();
    }
}
