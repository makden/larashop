<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
//use Illuminate\Http\Request;
 


class MainController extends Controller
{

    public function index(){

        return view("index");
    }

  
    

}
