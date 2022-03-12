<?php

namespace App\Http\Controllers;

use App\Models\penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyewa = Penyewa::orderbyDesc("created_at")->paginate(10);
        return view('admin.penyewa.index', compact('penyewa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penyewa.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penyewa = new Penyewa;
        $penyewa->nama_lengkap = $request->nama_lengkap;
        $penyewa->foto = $request->foto;
        $penyewa->jk = $request->jk;
        $penyewa->pekerjaan = $request->pekerjaan;
        $penyewa->alamat = $request->alamat;

        if ($request->hasFile('foto')) {
            $penyewa->deleteImage();
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/ktp/', $name);
            $penyewa->foto = $name;
        }

        $penyewa->save();
        return redirect()->route('penyewa.index')->with('status', 'Data Berhasil Ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penyewa $penyewa
     * @return \Illuminate\Http\Response
     */
    public function show(penyewa $penyewa, $id)
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('admin.penyewa.show', compact('penyewa'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penyewa  $penyewa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('admin.penyewa.edit', compact('penyewa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penyewa  $penyewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',

        ]);

        $penyewa = Penyewa::findOrFail($id);
        $penyewa->email = $request->email;
        $penyewa->password = $request->password;
        $penyewa->nama_lengkap = $request->nama_lengkap;
        $penyewa->jk = $request->jk;
        $penyewa->pekerjaan = $request->pekerjaan;
        $penyewa->alamat = $request->alamat;

        $penyewa->save();
        return redirect()->route('penyewa.index')->with('status', 'Data Berhasil Ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penyewa  $penyewa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->delete();

        return redirect()->route('penyewa.index')->with('status', 'Data Berhasil Dihapus!');

    }
}