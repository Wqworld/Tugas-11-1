<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use PDO;

class siswaController extends Controller
{
    public function index()
    {
        if (!session()->has('nis')) {
            return redirect('/');
        }

        $siswa = siswa::where('nis', session('nis'))->first();

        $datareal = $siswa->status == 'lulus';
        return view('siswa.index', ['lulus' => $datareal, 'siswa' => $siswa]);
    }

    public function create()
    {
        return view('siswa.form.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'nama_siswa'=>'required',
            'nis'=>'required',
            'nisn'=>'required', 
            'status'=>'required',
        ]);

        siswa::create($validasiData);

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = siswa::findorfail($id);

        return view('admin.form.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'nama_siswa'=>'required',
            'nis'=>'required',
            'nisn'=>'required', 
            'status'=>'required',
        ]);

        $siswa = siswa::where('id',$id)->update($validasiData);

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = siswa::findorfail($id)->delete();

        return redirect()->route('admin.index');
    }
}
