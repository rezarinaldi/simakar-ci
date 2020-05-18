<?php

namespace App\Http\Controllers;
use \App\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index(){
        $provinsi = Provinsi::all();
        return response()->json($provinsi);
    }
    
    public function show($id){
        $provinsi = Provinsi::find($id);
        return response()->json($provinsi);
    }

    public function create(Request $request){
        // validasi input
        $this->validate($request,[
            'nama_provinsi' => 'required|string'
        ]);
        // tambah data ke tabel
        $data = $request->all();
        $provinsi = Provinsi::create($data);
        // return data bentuk json
        return response()->json($provinsi);
    }

    public function update(Request $request, $id){
        $provinsi = Provinsi::find($id);

        if (!$provinsi) {
            # code...
            return response()->json(['message' => 'provinsi not found!'], 404);
        }

        $this->validate($request,[
            'nama_provinsi' => 'string'
        ]);

        $data = $request->all();
        $provinsi->fill($data);
        $provinsi->save();
        return response()->json($provinsi);
    }

    public function destroy($id){
        $provinsi = Provinsi::find($id);
        if (!$provinsi) {
            # code...
            return response()->json(['message' => 'provinsi not found!'], 404);
        }

        $provinsi->delete();
        return response()->json(['message','provinsi deleted!']);
    }
}