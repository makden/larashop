<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class Category extends Controller
{
    public function index(){

        return view('catalog',["categories" => Categories::get()]);

    }


    public function category($alias){

            

         $res = Categories::where('alias',$alias)->first();
        return view('category',["category" => $res]);
      
 
         // $products = Products::all();
 
         // return view('catalog',["products" => $products]);
    }
 
}
