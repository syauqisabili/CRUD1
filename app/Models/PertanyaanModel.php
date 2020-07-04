<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PertanyaanModel {

    public static function getAll(){
        return DB::table('pertanyaan')->get();
    }

    //array associative [key][value]
    public static function insertData($data){
        unset($data["_token"]);
        $data['created_at'] = Carbon::now('Y-m-d');
        $new_item = DB::table('pertanyaan')->insert($data);
        return $new_item;
    }
}
