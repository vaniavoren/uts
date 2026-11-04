<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = MataKuliah::all();
        return view('indexMataKuliah', compact('data'));
    }

    public function create()
    {
        return view('MataKuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate(['kode' => 'required', 'nama_matakuliah' => 'required']);
        MataKuliah::create($request->only('kode', 'nama_matakuliah'));
        return redirect()->route('MataKuliah.index')->with('success', 'Data ditambahkan');
    }

    public function show($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('MataKuliah.show', compact('mk'));
    }

    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('MataKuliah.edit', compact('mk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['kode' => 'required', 'nama_matakuliah' => 'required']);
        MataKuliah::findOrFail($id)->update($request->only('kode', 'nama_matakuliah'));
        return redirect()->route('MataKuliah.index')->with('success', 'Data diubah');
    }

    public function destroy($id)
    {
        MataKuliah::findOrFail($id)->delete();
        return redirect()->route('MataKuliah.index')->with('success', 'Data dihapus');
    }
}