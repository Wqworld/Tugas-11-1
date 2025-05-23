<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\siswa;
use Illuminate\Http\Request;

class sesiController extends Controller
{

    
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nisn' => 'required',
        ], [
            'nis.required' => 'Nis Wajib Berupa angka',
            'nisn.required' => 'Nisn Wajib Berupa angka',
        ]);

        $siswa = siswa::where('nis', $request->nis)
            ->where('nisn', $request->nisn)
            ->first();

        $admin = admin::where('nis', $request->nis)
            ->where('nisn', $request->nisn)
            ->first();    

        if ($siswa) {
            session(['nis' => $siswa->nis, 'nisn' => $siswa->nisn]);
            return redirect('/siswa');
        } else if ($admin) {
            session(['nis' => $admin->nis, 'nisn' => $admin->nisn]);
            return redirect('/admin');
        } else {
            return back();
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/')->with('success', 'Berhasil logout.');
    }
}




            // if ($siswa->status == 'lulus') {
            //     return redirect('lulus');
            // } else if ($siswa->status == 'tidak_lulus') {
            //     return redirect('tidaklulus');
            // } else {
            //     return back()->withErrors('Nis atau Nisn salah')->withInput();
            // }