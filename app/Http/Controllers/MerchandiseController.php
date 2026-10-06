<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    // BROWSE
    public function index(Request $request)
    {
        $query = Merchandise::query();

        if ($request->has('search')) {
            $search = $request->search;

            $query->where('Nama_Merchandise', 'like', '%' . $search . '%')
                  ->orWhere('Kategori', 'like', '%' . $search . '%');
        }

        $merchandise = $query->get();

        return view('merchandise.index', compact('merchandise'));
    }

    // ADD - menampilkan form
    public function create()
    {
        return view('merchandise.create');
    }

    // ADD - menyimpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama_merchandise' => 'required',
            'kategori' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Merchandise::create([
            'Nama_Merchandise' => $request->nama_merchandise,
            'Kategori' => $request->kategori,
            'Harga' => $request->harga,
            'Stok' => $request->stok,
        ]);

        return redirect('/merchandise');
    }

    // READ
    public function show($id)
    {
        $merchandise = Merchandise::findOrFail($id);

        return view('merchandise.show', compact('merchandise'));
    }

    // EDIT - menampilkan form
    public function edit($id)
    {
        $merchandise = Merchandise::findOrFail($id);

        return view('merchandise.edit', compact('merchandise'));
    }

    // EDIT - menyimpan perubahan
    public function update(Request $request, $id)
{
    $request->validate([
        'nama_merchandise' => 'required',
        'kategori' => 'required',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
    ]);

    $merchandise = Merchandise::findOrFail($id);

    $merchandise->nama_merchandise = $request->nama_merchandise;
    $merchandise->kategori = $request->kategori;
    $merchandise->harga = $request->harga;
    $merchandise->stok = $request->stok;

    $merchandise->save();

    return redirect()->route('merchandise.index')
        ->with('success', 'Data merchandise berhasil diperbarui.');
}

    // DELETE
    public function destroy($id)
    {
        $merchandise = Merchandise::findOrFail($id);

        $merchandise->delete();

        return redirect('/merchandise');
    }
}