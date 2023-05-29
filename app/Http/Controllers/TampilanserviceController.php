<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class TampilanserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service()
    {
        //menampilkan semua data dari model Service
        $service = Service::all();
        return view('user.service', compact('service'));
    }
  
}