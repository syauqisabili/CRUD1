<?php

namespace App\Models; // tanda '\' menunjuk class bukan directory file
use Illuminate\Support\Facades\DB; // tanda '\' menunjuk class bukan directory file
use Carbon\Carbon;

class JawabanModel {

    public static function getAll(){
        $items = DB::table('jawaban')->get();
        return $items;
    }

    //array associative [key][value]
    public static function insertData($data){
        unset($data["_token"]);
        $data['created_at'] = Carbon::now();
        $newItems = DB::table('jawaban')->insert($data);
        return $newItems;
    }

}
