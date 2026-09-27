<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    // BROWSE
    public function index(Request $request)
    {
        $query = Tiket::query();

        if ($request->has('search')) {
            $search = $request->search;

            $query->where('Jenis_Tiket', 'like', '%' . $search . '%')
                  ->orWhere('Kategori', 'like', '%' . $search . '%');
        }

        $tiket = $query->get();

        return view('tiket.index', compact('tiket'));
    }

    // ADD - menampilkan form
    public function create()
    {
        return view('tiket.create');
    }

    // ADD - menyimpan data
    public function store(Request $request)
    {
        $request->validate([
            'jenis_tiket' => 'required',
            'kategori' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Tiket::create([
            'Jenis_Tiket' => $request->jenis_tiket,
            'Kategori' => $request->kategori,
            'Harga' => $request->harga,
            'Stok' => $request->stok,
        ]);

        return redirect('/tiket');
    }

    // READ - melihat detail tiket
public function show($id)
{
    $tiket = Tiket::findOrFail($id);

    return view('tiket.show', compact('tiket'));
} 
    // EDIT - menampilkan form edit
public function edit($id)
{
    $tiket = Tiket::findOrFail($id);

    return view('tiket.edit', compact('tiket'));
}

// EDIT - menyimpan perubahan
public function update(Request $request, $id)
{
    $request->validate([
        'jenis_tiket' => 'required',
        'kategori' => 'required',
        'harga' => 'required|integer',
        'stok' => 'required|integer',
    ]);

    $tiket = Tiket::findOrFail($id);

    $tiket->update([
        'Jenis_Tiket' => $request->jenis_tiket,
        'Kategori' => $request->kategori,
        'Harga' => $request->harga,
        'Stok' => $request->stok,
    ]);

    return redirect('/tiket');
}

    // DELETE - menghapus data tiket
    public function destroy($id)
{
    $tiket = Tiket::findOrFail($id);

    $tiket->delete();

    return redirect('/tiket');
}
}