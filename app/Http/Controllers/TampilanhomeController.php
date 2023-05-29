<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class TampilanhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //menampilkan semua data dari model Home
        $home = Home::all();
        return view('user.home', compact('home'));
    }
  
}