<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
namespace App\Models\Prodicts;
//use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function index(){

        return view("index");
    }

    public function catalog(){

        $products = Products::where();

     

        return view('catalog',["products" => $products]);
    }

}
