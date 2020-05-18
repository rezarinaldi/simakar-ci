<?php

namespace App\Http\Controllers;
use \App\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index(){
        $kecamatan = Kecamatan::all();
        return response()->json($kecamatan);
    }
    
    public function show($id){
        $kecamatan = Kecamatan::find($id);
        return response()->json($kecamatan);
    }

    public function create(Request $request){
        // validasi input
        $this->validate($request,[
            'nama_kecamatan' => 'required|string'
        ]);
        // tambah data ke tabel
        $data = $request->all();
        $kecamatan = Kecamatan::create($data);
        // return data bentuk json
        return response()->json($kecamatan);
    }

    public function update(Request $request, $id){
        $kecamatan = Kecamatan::find($id);

        if (!$kecamatan) {
            # code...
            return response()->json(['message' => 'kecamatan not found!'], 404);
        }

        $this->validate($request,[
            'nama_kecamatan' => 'string'
        ]);

        $data = $request->all();
        $kecamatan->fill($data);
        $kecamatan->save();
        return response()->json($kecamatan);
    }

    public function destroy($id){
        $kecamatan = Kecamatan::find($id);
        if (!$kecamatan) {
            # code...
            return response()->json(['message' => 'kecamatan not found!'], 404);
        }

        $kecamatan->delete();
        return response()->json(['message','kecamatan deleted!']);
    }
}