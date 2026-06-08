<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $data = DB::table('keranjangbelanja')
            ->orderBy('ID')
            ->get();

        return view('keranjangbelanja.index', compact('data'));
    }

    public function create()
    {
        return view('keranjangbelanja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodebarang' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric'
        ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);

        return redirect('/keranjangbelanja')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        DB::table('keranjangbelanja')
            ->where('ID', $id)
            ->delete();

        return redirect('/keranjangbelanja')
            ->with('success', 'Data berhasil dihapus.');
    }
}
