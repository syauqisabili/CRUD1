<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{

    public function store(Request $request){
        $newItems = JawabanModel::insertData($request->all());
        return redirect('/jawaban');
    }

    public function index(){
        $items = JawabanModel::getAll();
        return view('jawaban.index');
    }
}
