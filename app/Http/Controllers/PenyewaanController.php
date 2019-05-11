<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function show() {
        $ruangan = \App\Ruangan::all();
        $penyewaan = \App\Penyewaan::all();
        // $ruang = \App\Ruangan::where('id_ruangan', $penyewaan['nama_ruangan']);
        return view('penyewaan.index', ['penyewaan' => $penyewaan, 'ruangan' => $ruangan]);
    }

    public function store(Request $request) {
        $table_penyewaan = new \App\Penyewaan;
        $table_penyewaan->nama_ruangan = $request->get('nama_ruangan');
        $table_penyewaan->nama_mahasiswa = $request->get('nama_mahasiswa');
        $table_penyewaan->nim = $request->get('nim');
        $table_penyewaan->tgl_sewa = $request->get('tgl_sewa');
        $table_penyewaan->tgl_selesai = $request->get('tgl_selesai');
        $table_penyewaan->save();

        return redirect('sewa');
    }

    public function edit(Request $request) {
        $penyewaan = \App\Penyewaan::where('id_penyewaan', $request->get('id_penyewaan'))
                    ->update(['nama_ruangan' => $request->get('nama_ruangan'), 'nama_mahasiswa' => $request->get('nama_mahasiswa'),'nim' => $request->get('nim'), 'tgl_sewa' => $request->get('tgl_sewa'), 'tgl_selesai' => $request->get('tgl_selesai')]);
        return redirect('sewa');
    }

    public function delete(Request $request) {
        $penyewaan = \App\Penyewaan::where('id_penyewaan', $request->id)
                    ->delete();
        return redirect('sewa');
    }
}
