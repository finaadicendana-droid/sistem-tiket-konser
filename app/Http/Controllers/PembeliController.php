<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $pembeli = Pembeli::when($search, function ($query) use ($search) {

            $query->where('Nama_Pembeli', 'like', "%$search%")
                  ->orWhere('Email', 'like', "%$search%")
                  ->orWhere('No_Hp', 'like', "%$search%");

        })->get();

        return view('pembeli.index', compact('pembeli'));
    }


    // HALAMAN TAMBAH
    public function create()
    {
        return view('pembeli.create');
    }


    // SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Pembeli' => 'required',
            'Email' => 'required|email',
            'No_Hp' => 'required',
            'Alamat' => 'nullable',
        ]);

        Pembeli::create([
            'Nama_Pembeli' => $request->Nama_Pembeli,
            'Email' => $request->Email,
            'No_Hp' => $request->No_Hp,
            'Alamat' => $request->Alamat,
        ]);

        return redirect('/pembeli')
            ->with('success', 'Data pembeli berhasil ditambahkan.');
    }


    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);

        return view('pembeli.show', compact('pembeli'));
    }


    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);

        return view('pembeli.edit', compact('pembeli'));
    }


    public function update(Request $request, $id)
    {
        $pembeli = Pembeli::findOrFail($id);

        $request->validate([
            'Nama_Pembeli' => 'required',
            'Email' => 'required|email',
            'No_Hp' => 'required',
            'Alamat' => 'nullable',
        ]);

        $pembeli->update([
            'Nama_Pembeli' => $request->Nama_Pembeli,
            'Email' => $request->Email,
            'No_Hp' => $request->No_Hp,
            'Alamat' => $request->Alamat,
        ]);

        return redirect('/pembeli')
            ->with('success', 'Data pembeli berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);

        $pembeli->delete();

        return redirect('/pembeli')
            ->with('success', 'Data pembeli berhasil dihapus.');
    }
}