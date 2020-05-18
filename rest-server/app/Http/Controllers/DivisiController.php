<?php

namespace App\Http\Controllers;
use \App\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index(){
        $divisi = Divisi::all();
        return response()->json($divisi);
    }
    
    public function show($id){
        $divisi = Divisi::find($id);
        return response()->json($divisi);
    }

    public function create(Request $request){
        // validasi input
        $this->validate($request,[
            'nama_divisi' => 'required|string'
        ]);
        // tambah data ke tabel
        $data = $request->all();
        $divisi = Divisi::create($data);
        // return data bentuk json
        return response()->json($divisi);
    }

    public function update(Request $request, $id){
        $divisi = Divisi::find($id);

        if (!$divisi) {
            # code...
            return response()->json(['message' => 'Divisi not found!'], 404);
        }

        $this->validate($request,[
            'nama_divisi' => 'string'
        ]);

        $data = $request->all();
        $divisi->fill($data);
        $divisi->save();
        return response()->json($divisi);
    }

    public function destroy($id){
        $divisi = Divisi::find($id);
        if (!$divisi) {
            # code...
            return response()->json(['message' => 'Divisi not found!'], 404);
        }

        $divisi->delete();
        return response()->json(['message','Divisi deleted!']);
    }
}