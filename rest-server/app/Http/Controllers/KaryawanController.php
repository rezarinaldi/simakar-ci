<?php

namespace App\Http\Controllers;
use \App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = Karyawan::all();
        return response()->json($karyawan);
    }
    
    public function show($id){
        $karyawan = Karyawan::find($id);
        return response()->json($karyawan);
    }

    public function create(Request $request){
        // validasi input
        $this->validate($request,[
            'nama' => 'required|string',
            'email' => 'required|email:filter',
            'no_hp' => 'required|numeric',
            'alamat' => 'required|string',
            'gender' => 'required|in:pria,wanita',
            'umur' => 'required|numeric',
            'id_jabatan' => 'required|numeric|exists:jabatan,id',
            'id_provinsi' => 'required|numeric|exists:provinsi,id',
            'id_kecamatan' => 'required|numeric|exists:kecamatan,id',
            'id_kt_kb' => 'required|numeric|exists:kt_kb,id',
            'id_divisi' => 'required|numeric|exists:divisi,id',
            'id_gaji' => 'required|numeric|exists:gaji,id'
        ]);
        // tambah data ke tabel
        $data = $request->all();
        $karyawan = Karyawan::create($data);
        // return data bentuk json
        return response()->json($karyawan);
    }

    public function update(Request $request, $id){
        $karyawan = Karyawan::find($id);

        if (!$karyawan) {
            # code...
            return response()->json(['message' => 'Karyawan not found!'], 404);
        }

        $this->validate($request,[
            'nama' => 'string',
            'email' => 'email:filter',
            'no_hp' => 'numeric',
            'alamat' => 'string',
            'gender' => 'in:pria,wanita',
            'umur' => 'numeric',
            'id_jabatan' => 'numeric|exists:jabatan,id',
            'id_provinsi' => 'numeric|exists:provinsi,id',
            'id_kecamatan' => 'numeric|exists:kecamatan,id',
            'id_kt_kb' => 'numeric|exists:kt_kb,id',
            'id_divisi' => 'numeric|exists:divisi,id',
            'id_gaji' => 'numeric|exists:gaji,id'
        ]);
        
        $data = $request->all();
        $karyawan->fill($data);
        $karyawan->save();
        return response()->json($karyawan);
    }

    public function destroy($id){
        $karyawan = Karyawan::find($id);
        if (!$karyawan) {
            # code...
            return response()->json(['message' => 'Karyawan not found!'], 404);
        }

        $karyawan->delete();
        return response()->json(['message','Karyawan deleted!']);
    }
}