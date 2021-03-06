<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = mobil::all();
        return view('admin.mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = mobil::all();
        return view('admin.mobil.create', compact('mobil'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobil = new mobil();
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->tahun_pembuatan = $request->tahun_pembuatan;
        $mobil->no_mobil = $request->no_mobil;
        $mobil->jenis_mobil = $request->jenis_mobil;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->fasilitas_mobil = $request->fasilitas_mobil;

        if ($request->hasFile('gambar')) {
            $mobil->deleteImage();
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->save();
        return redirect()->route('mobil.index')->with('status', 'Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = mobil::findOrFail($id);
        return view('admin.mobil.show', compact('mobil'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.edit', compact('mobil'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_mobil' => 'required',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
            'tahun_pembuatan' => 'required',
            'harga_sewa' => 'required',
            'kapasitas_penumpang' => 'required',
            'fasilitas_mobil' => 'required',
            'gambar' => 'image|max:2048',
        ]);

        $mobil = Mobil::FindOrFail($id);
        $mobil->no_mobil = $request->no_mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->jenis_mobil = $request->jenis_mobil;
        $mobil->tahun_pembuatan = $request->tahun_pembuatan;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->fasilitas_mobil = $request->fasilitas_mobil;

        if ($request->hasFile('gambar')) {
            $mobil->deleteImage();
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->save();
        return redirect()->route('mobil.index')->with('status', 'Data Berhasil Diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->deleteImage();
        $mobil->delete();
        return redirect()->route('mobil.index')->with('status', 'Data Berhasil Dihapus!');

    }
}
