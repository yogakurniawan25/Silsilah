<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orang extends Model
{
    use HasFactory;
    protected $table = "orang";
    public function allData()
    {
        return DB::table('orang')->get();
    }

    public function addData($data)
    {
        DB::table('orang')->insert($data);

    }

    public function detailData($id)
    {
        return DB::table('orang')->where('id', $id)->first();
    }

    public function editData($id, $data)
    {
        DB::table('orang')
        ->where('id', $id)
        ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('orang')
        ->where('id', $id)
        ->delete();
    }
}
