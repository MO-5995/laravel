<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        //全件取得
        $values = Test::all();

        // dd($values); //処理を止めて内容を確認できる
        return view('tests.test', compact('values'));
    }
}