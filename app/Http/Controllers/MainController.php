<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;




class MainController extends Controller
{
    
public function welcome() {
    return view('welcome');
}
public function libri() {
    return view('libri');
}
public function edit() {
    return view('edit');
}
public function add() {
    return view('add');
}



}
