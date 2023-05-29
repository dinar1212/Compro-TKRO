<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        //menampilkan semua data dari model Service
        $service = Service::all();
        return view('servis.index', compact('service'));
    }

    public function create()
    {
        return view('servis.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
          
            'foto' => 'required|image|max:2048',
            'kegiatan' => 'required',
            'keterangan' => 'required',
        ]);

        $service = new Service();
       
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/service/', $name);
            $service->foto = $name;
            $service->kegiatan = $request->kegiatan;
            $service->keterangan = $request->keterangan;
        }
        $service->save();
        return redirect()->route('servis.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('servis.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('servis.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
         
            'foto' => 'required|image|max:2048',
            'kegiatan' => 'required',
            'keterangan' => 'required',
        ]);

        $service = Service::findOrFail($id);
      
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/service/', $name);
            $service->foto = $name;
            $service->kegiatan = $request->kegiatan;
            $service->keterangan = $request->keterangan;
        }
        $service->save();
        return redirect()->route('servis.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $service = service::find($id);
        $foto = $service->foto;

        if (!service::destroy($id)) {
            return redirect()->back();
        }
        if ($foto) {
            $service->deleteImage();
        }
        return redirect()->route('servis.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}