<?php

namespace App\Http\Controllers;
use \App\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){
        $gaji = Gaji::all();
        return response()->json($gaji);
    }
    
    public function show($id){
        $gaji = Gaji::find($id);
        return response()->json($gaji);
    }

    public function create(Request $request){
        // validasi input
        $this->validate($request,[
            'jumlah_gaji' => 'required|numeric'
        ]);
        // tambah data ke tabel
        $data = $request->all();
        $gaji = Gaji::create($data);
        // return data bentuk json
        return response()->json($gaji);
    }

    public function update(Request $request, $id){
        $gaji = Gaji::find($id);

        if (!$gaji) {
            # code...
            return response()->json(['message' => 'gaji not found!'], 404);
        }

        $this->validate($request,[
            'nama_gaji' => 'string'
        ]);

        $data = $request->all();
        $gaji->fill($data);
        $gaji->save();
        return response()->json($gaji);
    }

    public function destroy($id){
        $gaji = Gaji::find($id);
        if (!$gaji) {
            # code...
            return response()->json(['message' => 'gaji not found!'], 404);
        }

        $gaji->delete();
        return response()->json(['message','gaji deleted!']);
    }
}