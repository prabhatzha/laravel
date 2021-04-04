<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loops extends Controller
{
    //

    function loadloops()
    {
        $data = ['prabhat','sonu','ashima','dell','asus','macbook'];
        return view("loops" , ["names"=>$data]);
    }
}
