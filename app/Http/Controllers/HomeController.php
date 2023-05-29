<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        //menampilkan semua data dari model Home
        $home = Home::all();
        return view('home.index', compact('home'));
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
          
            'foto' => 'required|image|max:2048',
            'foto2' => 'required|image|max:2048',
            'fotoheader' => 'required|image|max:2048',
            'kegiatan' => 'required',
            'pengajar' => 'required',
            'siswa' => 'required',
            'clients' => 'required',
            'project' => 'required',
        ]);

        $home = new Home();
       
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/home/', $name);
            $home->foto = $name;
        if ($request->hasFile('foto2')) {
            $image2 = $request->file('foto2');
            $name = rand(1000, 9999) . $image2->getClientOriginalName();
            $image2->move('images2/home/', $name);
            $home->foto2 = $name;
        if ($request->hasFile('fotoheader')) {
            $imageheader = $request->file('fotoheader');
            $name = rand(1000, 9999) . $imageheader->getClientOriginalName();
            $imageheader->move('imagesheader/home/', $name);

          
         
            $home->fotoheader = $name;
            $home->kegiatan = $request->kegiatan;
            $home->pengajar = $request->pengajar;
            $home->siswa = $request->siswa;
            $home->clients = $request->clients;
            $home->project = $request->project;
        }
        $home->save();
        return redirect()->route('home.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
    }

    public function show($id)
    {
        $home = Home::findOrFail($id);
        return view('home.show', compact('home'));
    }

    public function edit($id)
    {
        $home = Home::findOrFail($id);
        return view('home.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
         
            'foto' => 'required|image|max:2048',
            'foto2' => 'required|image|max:2048',
            'fotoheader' => 'required|image|max:2048',
            'kegiatan' => 'required',
            'pengajar' => 'required',
            'siswa' => 'required',
            'clients' => 'required',
            'project' => 'required',
        ]);

        $home = Home::findOrFail($id);
      
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/home/', $name);
            $home->foto = $name;
            if ($request->hasFile('foto2')) {
                $image2 = $request->file('foto2');
                $name = rand(1000, 9999) . $image2->getClientOriginalName();
                $image2->move('images2/home/', $name);
                $home->foto2 = $name;
            if ($request->hasFile('fotoheader')) {
                $imageheader = $request->file('fotoheader');
                $name = rand(1000, 9999) . $imageheader->getClientOriginalName();
                $imageheader->move('imagesheader/home/', $name);
    
              
               
                $home->fotoheader = $name;
            $home->kegiatan = $request->kegiatan;
            $home->pengajar = $request->pengajar;
            $home->siswa = $request->siswa;
            $home->clients = $request->clients;
            $home->project = $request->project;
        }
        $home->save();
        return redirect()->route('home.index')
            ->with('success', 'Data berhasil diedit!');

    }
}
    }

    public function destroy($id)
    {
        $home = home::find($id);
        $foto = $home->foto;
        $foto2 = $home->foto2;
        $fotoheader = $home->fotoheader;

        if (!home::destroy($id)) {
            return redirect()->back();
        }
        if ($foto) {
            $home->deleteImage();
        }
        if ($foto2) {
            $home->deleteImage2();
        }
        if ($fotoheader) {
            $home->deleteImageheader();
        }
        return redirect()->route('home.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}