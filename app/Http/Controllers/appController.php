<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use Illuminate\Http\Request;

class appController extends Controller
{
    public function __construct()
    {
        $this->Orang = new Orang();
    }

    public function index()
    { 
        $data = [
            'orang' => $this->Orang->allData(),
        ];
        return view('dashboard', $data);
    }

    public function addorg()
    {
        return view('add'); 
    }

    public function insert(){
        Request()->validate([
            'nama' => 'required',
            'jk' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'nama' => Request()->nama,
            'jk' => Request()->jk,
            'status' => Request()->status,
        ];
        $this->Orang->addData($data);
        return redirect()->route('home')->with('pesan','Data Berhasil di Tambahkan');
    }

    public function detailData($id)
    {
        if (!$this->Orang->detailData($id)){
            abort(404);
        }
        $data =[
            'orang' => $this->Orang->detail($id),
        ];
        return view('detail', $data);  
    }

    public function edit($id)
    {
        if (!$this->Orang->detailData($id)){
            abort(404);
        }
        $data =[
            'orang' => $this->Orang->detailData($id)
        ];
        return view('edit', $data);   
    }

    public function update($id){
        Request()->validate([
            'nama' => 'required',
            'jk' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'nama' => Request()->nama,
            'jk' => Request()->jk,
            'status' => Request()->status,
        ];
        $this->Orang->editData($id, $data);
        return redirect()->route('home')->with('pesan','Data Berhasil di Update!!');
    }

    public function delete($id)
    {
        $this->Orang->deleteData($id);
        return redirect()->route('home')->with('pesan','Data Berhasil di Hapus');
    }

    public function detail($id)
    { 
        $data = [
            'orang' => $this->Orang->detailData($id),
        ];
        return view('detail', $data);
    }
}
