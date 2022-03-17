<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;

class Jobs extends Controller
{
    public function show_data(){
        $data = job::all();
        $data1 = compact($data);
        return view('getdata');
    }
}
