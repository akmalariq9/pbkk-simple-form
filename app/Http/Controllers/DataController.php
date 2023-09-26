<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'regex:/^[A-Za-z\s]+$/'],
            'email' => ['required', 'email:rfc'],
            'nomor_hp' => ['required', 'regex:/^(?:\+62|62)\d{10,15}$/'],
            'nilai' => ['required', 'numeric', 'between:2.50,99.99'],
            'gambar' => ['required', 'max:2048', 'mimes:jpg,jpeg,png']
        ], [
            'nama.regex' => 'Format nama tidak valid. Nama hanya boleh mengandung huruf dan spasi.',
            'nomor_hp.regex' => 'Format nomor hp tidak valid. Nomor HP harus diawali 62 atau +62.'
        ]);
        

        $gambar = $request->file('gambar');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('uploads'), $namaGambar);

        Data::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'nilai' => $request->nilai,
            'gambar' => $namaGambar,
        ]);

        return redirect()->route('data.index')->with('success', 'Data berhasil disimpan');
    }

    public function index()
    {
        $data = Data::all();
        return view('data', compact('data'));
    }
}
