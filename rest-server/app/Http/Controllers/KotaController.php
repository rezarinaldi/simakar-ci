<?php

namespace App\Http\Controllers;
use \App\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){
        $kota = Kota::all();
        return response()->json($kota);
    }
    
    public function show($id){
        $kota = Kota::find($id);
        return response()->json($kota);
    }

    public function create(Request $request){
        // validasi input
        $this->validate($request,[
            'nama_kt_kb' => 'required|string',
            'kode_pos' => 'required|numeric'
        ]);
        // tambah data ke tabel
        $data = $request->all();
        $kota = Kota::create($data);
        // return data bentuk json
        return response()->json($kota);
    }

    public function update(Request $request, $id){
        $kota = Kota::find($id);

        if (!$kota) {
            # code...
            return response()->json(['message' => 'Kota not found!'], 404);
        }

        $this->validate($request,[
            'nama_kt_kb' => 'required|string',
            'kode_pos' => 'required|numeric'
        ]);
        
        $data = $request->all();
        $kota->fill($data);
        $kota->save();
        return response()->json($kota);
    }

    public function destroy($id){
        $kota = Kota::find($id);
        if (!$kota) {
            # code...
            return response()->json(['message' => 'Kota not found!'], 404);
        }

        $kota->delete();
        return response()->json(['message','Kota deleted!']);
    }
}