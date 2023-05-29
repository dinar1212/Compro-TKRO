<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        //menampilkan semua data dari model Gallery
        $gallery = Gallery::all();
        return view('galery.index', compact('gallery'));
    }

    public function create()
    {
        return view('galery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
          
            'foto' => 'required|image|max:2048',
            'kegiatan' => 'required',
        ]);

        $gallery = new Gallery();
       
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/gallery/', $name);
            $gallery->foto = $name;
            $gallery->kegiatan = $request->kegiatan;
        }
        $gallery->save();
        return redirect()->route('galery.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galery.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
         
            'foto' => 'required|image|max:2048',
            'kegiatan' => 'required',
        ]);

        $gallery = Gallery::findOrFail($id);
      
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/gallery/', $name);
            $gallery->foto = $name;
            $gallery->kegiatan = $request->kegiatan;
        }
        $gallery->save();
        return redirect()->route('galery.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $gallery = gallery::find($id);
        $foto = $gallery->foto;

        if (!gallery::destroy($id)) {
            return redirect()->back();
        }
        if ($foto) {
            $gallery->deleteImage();
        }
        return redirect()->route('galery.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}