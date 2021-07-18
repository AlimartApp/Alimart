<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    public function index()
    {
        $data = Peserta::all();
        return view('admin/peserta', ['peserta' => $data]);
    }

    public function edit($id)
    {
        $edit = Peserta::find($id);
        return view('admin/peserta_edit', ['data' => $edit]);
    }
    public function update($id, Request $request)
    {
        $update = Peserta::find($id);
        $update->update([
            'nilai_hafalan' => $request->nilai_hafalan,
            'nilai_tajwid' => $request->nilai_tajwid,
            'nilai_nada' => $request->nilai_nada
        ]);

        if($update){
            //redirect dengan pesan sukses
            return redirect()->route('peserta')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('peserta')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

}
