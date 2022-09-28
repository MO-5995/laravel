<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        //Eloquent
        $values = Test::all();

        $count = Test::count();
        $first = Test::findOrFail(1);
        $whereBBB = Test::where('test', '=', 'bbb')->get();

        //クエリビルダ
        $queryBuilder = DB::table('tests')->where('test', '=', 'bbb')
        ->select('id','test')
        ->get();

        dd($values,$count, $first,$whereBBB,$queryBuilder); //処理を止めて内容を確認できる
        return view('tests.test', compact('values'));
    }
}