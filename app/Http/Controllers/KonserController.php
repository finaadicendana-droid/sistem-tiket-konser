<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    // BROWSE
    public function index(Request $request)
    {
        $query = Konser::query();

        if ($request->has('search')) {
            $search = $request->search;

            $query->where('Nama_Konser', 'like', '%' . $search . '%')
                  ->orWhere('Artis', 'like', '%' . $search . '%')
                  ->orWhere('Lokasi', 'like', '%' . $search . '%');
        }

        $konser = $query->get();

        return view('konser.index', compact('konser'));
    }

    // ADD - menampilkan form
    public function create()
    {
        return view('konser.create');
    }

    // ADD - menyimpan data
    public function store(Request $request)
    {

        $request->validate([
            'nama_konser' => 'required',
            'artis' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required|date',
        ]);
         Konser::create([
            'Nama_Konser' => $request->nama_konser,
            'Artis' => $request->artis,
            'Lokasi' => $request->lokasi,
            'Tanggal' => $request->tanggal,
    ]);
    return redirect('/konser');
    }

    //READ Melihat detail konser
    public function show($id)
    {
        $konser = Konser::findOrFail($id);
        return view('konser.show', compact('konser'));
    }

    //EDIT menampilkan form edit
    public function edit($id)
    {
        $konser = Konser::findOrFail($id);
        return view('konser.edit', compact('konser')); 
    }

    //UPDATE menyimpan perubahan data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_konser' => 'required',
            'artis' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $konser = Konser::findOrFail($id);
        $konser->update([
            'Nama_Konser' => $request->nama_konser,
            'Artis' => $request->artis,
            'Lokasi' => $request->lokasi,
            'Tanggal' => $request->tanggal,
        ]);

        return redirect('/konser');

    }
    //DELETE menghapus data
    public function destroy($id)
    {
        $konser = Konser::findOrFail($id);

        $konser->delete();

        return redirect('/konser');                                                                                     
    }
}
