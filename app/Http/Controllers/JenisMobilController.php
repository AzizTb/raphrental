<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisMobil;

class JenisMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenis['jenismobil'] = JenisMobil::all();
        return view('jenismobil.index', $jenis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jenismobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'nama_jenis' => 'required'
        ]);

        $insert = JenisMobil::create($request->toArray());
        if($insert == true ){
            $request->session()->flash('success', 'Berhasil Menambah Jenis Mobil!');
            return redirect()->route('jenismobil.index');
        } else {
            $request->session()->flash('danger', 'Gagal Menambah Jenis Mobil!');
            return redirect()->route('jenismobil.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['jenismobil'] = JenisMobil::find($id);
        return view('jenismobil.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validate = $request->validate([
            'nama_jenis' => 'required|max:30',
        ]);

        $update = JenisMobil::find($id)->update($request->toArray());
        if($update) {
            $request->session()->flash('success', 'Berhasil Mengubah Jenis Mobil !');
            return redirect()->route('jenismobil.index');
        } else {
            $request->session()->flash('danger', 'Gagal Mengubah Jenis Mobil !');
            return redirect()->route('jenismobil.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jenis = JenisMobil::destroy($id);
        return redirect()->route('jenismobil.index');
    }
}
