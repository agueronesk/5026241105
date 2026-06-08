<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    public function index()
    {
        $data = DB::table('nilaikuliah')
            ->orderBy('ID')
            ->get();

        return view('nilaikuliah.index', compact('data'));
    }

    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nrp' => 'required|max:6',
            'nilaiangka' => 'required|numeric',
            'sks' => 'required|numeric',
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks,
        ]);

        return redirect('/nilaikuliah')
            ->with('success', 'Data nilai kuliah berhasil ditambahkan.');
    }
}
