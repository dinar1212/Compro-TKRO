<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Contact
        $contact = Contact::all();
        return view('contak.index', compact('contact'));
    }

    public function create()
    {
        return view('contak.create');
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
        return redirect()->route('contak.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contak.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contak.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'no_tlp' => 'required',
            'nama' => 'required',
            'isi' => 'required',
            'email' => 'required',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->no_tlp = $request->no_tlp;
        $contact->nama = $request->nama;
        $contact->isi = $request->isi;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->route('contak.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $contact = contact::find($id);
        if (!contact::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('contak.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}