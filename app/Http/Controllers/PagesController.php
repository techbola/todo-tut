<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //methods under the pagescontroller controller

    public function new()
    {

    	//echo "some data";

    	return view('new_view');
    }

}
