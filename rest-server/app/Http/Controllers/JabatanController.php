<?php

namespace App\Http\Controllers;
use \App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){
        $jabatan = Jabatan::all();
        return response()->json($jabatan);
    }
    
    public function show($id){
        $jabatan = Jabatan::find($id);
        return response()->json($jabatan);
    }

    public function create(Request $request){
        // validasi input
        $this->validate($request,[
            'nama_jabatan' => 'required|string'
        ]);
        // tambah data ke tabel
        $data = $request->all();
        $jabatan = Jabatan::create($data);
        // return data bentuk json
        return response()->json($jabatan);
    }

    public function update(Request $request, $id){
        $jabatan = Jabatan::find($id);

        if (!$jabatan) {
            # code...
            return response()->json(['message' => 'Jabatan not found!'], 404);
        }

        $this->validate($request,[
            'nama_jabatan' => 'required|string'
        ]);

        $data = $request->all();
        $jabatan->fill($data);
        $jabatan->save();
        return response()->json($jabatan);
    }

    public function destroy($id){
        $jabatan = Jabatan::find($id);
        if (!$jabatan) {
            # code...
            return response()->json(['message' => 'Jabatan not found!'], 404);
        }

        $jabatan->delete();
        return response()->json(['message','Jabatan deleted!']);
    }
}