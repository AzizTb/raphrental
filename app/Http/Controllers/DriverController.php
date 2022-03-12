<?php

namespace App\Http\Controllers;

use App\Models\driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver = driver::orderbyDesc("created_at")->paginate(10);
        return view('admin.driver.index', compact('driver'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.driver.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $driver = new Driver;
        $driver->nama_driver = $request->nama_driver;
        $driver->jenis_kelamin = $request->jenis_kelamin;
        $driver->alamat_driver = $request->alamat_driver;
        $driver->no_telpon = $request->no_telpon;

        $driver->save();
        return redirect()->route('driver.index')->with('status', 'Data Berhasil Ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(driver $driver, $id)
    {
        $driver = Driver::findOrFail($id);
        return view('admin.driver.show', compact('driver'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('admin.driver.edit', compact('driver'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_driver' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_driver' => 'required',
            'no_telpon' => 'required',
        ]);
        $driver = Driver::findOrFail($id);
        $driver->nama_driver = $request->nama_driver;
        $driver->jenis_kelamin = $request->jenis_kelamin;
        $driver->alamat_driver = $request->alamat_driver;
        $driver->no_telpon = $request->no_telpon;

        if ($request->hasFile('foto_driver')) {
            $driver->deleteImage();
            $image = $request->file('foto_driver');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/driver/', $name);
            $driver->foto_driver = $name;
        }

        $driver->save();
        return redirect()->route('driver.index')->with('status', 'Data Berhasil Diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();

        return redirect()->route('driver.index')->with('status', 'Data Berhasil Dihapus!');

    }
}
