<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;
use App\Models\Test;
use Illuminate\Support\Facades\DB; 

class TestController extends Controller
{
    public function index()
    {
        // エロクアント
        $values = Test::all();
        
        $count = Test::count();

        $first = Test::findOrFail(1);

        $where = Test::where("text", "=", "aaa")->get();
        
        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'aaa')->select('id', 'text')->get();
        
        dd($values, $count, $first, $where, $queryBuilder);

        return view("tests.test", compact('values'));
    }
}
