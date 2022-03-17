<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function adminIndex()
    {
    	return view('admin_panel.adminLogin');
    }
}
