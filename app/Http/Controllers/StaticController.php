<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function homepage() {
      return view('homepage');
    }

    public function index(){

      $data = [
        'nomi' => ['Giuseppe', 'Sofia', 'Donato', 'Luigi'],
        'classe'=> 'classe 5'
      ];
      return view('prova.seconda.index', $data);
    }

    public function privacy() {
      return view('privacy-policy');
    }


}
