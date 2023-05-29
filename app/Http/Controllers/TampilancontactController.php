<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class TampilancontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Contact
        $contact = Contact::all();
        return view('user.contact', compact('contact'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_tlp' => 'required',
            'nama' => 'required',
            'isi' => 'required',
            'email' => 'required',
        ]);

        $contact = new Contact();
        $contact->no_tlp = $request->no_tlp;
        $contact->nama = $request->nama;
        $contact->isi = $request->isi;
        $contact->email = $request->email;
        $contact->save();
        return view('user.contact');
    }
}