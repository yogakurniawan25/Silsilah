<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function Listperempuan($status)
    {
        $orang = Orang::where('status', $status)->where('jk', 'Perempuan')->get();
        if($orang->isEmpty()){
            return response(['message' => 'kosong'], 404);
        }else{
            return response(['anak' => $orang, 'message' => 'data ditemukan']);
        }
    }

    public function ListkeluargaBudi($status)
    {
        $orang = Orang::where('status', $status)->get();
        if($orang->isEmpty()){
            return response(['message' => 'kosong'], 404);
        }else{
            return response(['data' => $orang, 'message' => 'data ditemukan']);
        }
    
    }

    public function sepupulaki()
    {
        $orang = Orang::where('status', 'cucu')->where('jk', 'laki-laki')->get();
        if($orang->isEmpty()){
            return response(['message' => 'kosong'], 404);
        }else{
            return response(['anak' => $orang, 'message' => 'data ditemukan']);
        }
    }

    public function keluargabudi()
    {
        $orang = Orang::all();
        return response(['anggota' => $orang]);
    }

    public function insert(){
        $nama = request()->post('nama');
        $jk = request()->post('jk');
        $status = request()->post('status');

        $data = [
            'nama' => $nama,
            'jk' => $jk,
            'status' => $status
        ];

        $ins = Orang::insert($data);
        if($ins){
            return response(['message' => 'Data berhasil ditambahkan']);
        }else{
            return response(['message' => 'Data gagal disimpan'], 500);
        }
    }

    public function update($id)
    {
        $status = request()->post('status');
        $nama = request()->post('nama');
        $jk = request()->post('jk');

        $data = [
            'nama' => $nama,
            'jk' => $jk,
            'status' => $status
        ];
       
        $ins = Orang::where('id', $id)->update($data);

        if($ins){
            return response(['message' => 'Data berhasil di Update']);
        }else{
            return response(['message' => 'Update Gagal'], 500);
        }
    }

    public function delete($id){
        $ins = Orang::where('id', $id)->delete();

        if($ins){
            return response(['message' => 'Data berhasil di hapus']);
        }else{
            return response(['message' => 'Data Gagal dihapus'], 500);
        }
    }
}
