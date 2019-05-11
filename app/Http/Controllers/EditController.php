<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function edit(Request $request) {
        $ruangan = \App\Ruangan::where('id_ruangan', $request->get('id_ruangan'))
                    ->update(['nama_ruangan' => $request->get('nama_ruangan'), 'kapasitas' => $request->get('kapasitas')]);
        return redirect('ruangan/');
    }

    public function delete(Request $request) {
        $ruangan = \App\Ruangan::where('id_ruangan', $request->id)
                    ->delete();
        return redirect('ruangan/');
    }
}
