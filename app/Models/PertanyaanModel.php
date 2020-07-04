<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {

    public static function getAll(){
        return DB::table('pertanyaan')->get();
    }

    //array associative [key][value]
    public static function insertData($data){
        unset($data["_token"]);
        return DB::table('pertanyaan')->insert($data);
    }
}
