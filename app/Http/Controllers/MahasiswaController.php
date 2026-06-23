<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display all data
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show form create
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store data
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show detail data (SHOW)
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show form edit
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update data
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Delete data
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}