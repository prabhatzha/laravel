<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\answers;

use App\Models\prabhat;

class HtmlController extends Controller
{
    //
    function getdata(Request $req)
    {
        return $req->input();
    }

    function prabhat ()
    {
        return DB::select("select * from answer");
    }
    function getall()
    {
        return answers::all();
    }

   
}
