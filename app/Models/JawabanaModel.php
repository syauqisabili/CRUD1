<?php

namespace App\Models; // tanda '\' menunjuk class bukan directory file
use Illuminate\Support\Facades\DB; // tanda '\' menunjuk class bukan directory file


class JawabanModel {

    public static function getAll(){
        $items = DB::table('jawaban')->get();
        return $items;
    }

    //array associative [key][value]
    public static function insertData($data){
        unset($data["_token"]);
        $newItems = DB::table('jawaban')->insert($data);
        return $newItems;
    }

}
