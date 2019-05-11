<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index() {
        $ruangan = \App\Ruangan::all();
        return view('ruangan.index', ['ruangan' => $ruangan]);
    }

    // membuat function create untuk menampilkan view layouts.ruangan pada url (localhost:8000/table_ruangan/create)
    // url terakhir create diambil dari nama function
    public function create() {
        return view('ruangan.create');
    }

    // function store berfungsi untuk menambahkan record kepada database di table_ruangan
    public function store(Request $request) {
        $table_ruangan = new \App\Ruangan;
        $table_ruangan->nama_ruangan = $request->get('nama_ruangan');
        $table_ruangan->kapasitas = $request->get('kapasitas');
        $table_ruangan->save();

        return redirect('ruangan');
    }
}
