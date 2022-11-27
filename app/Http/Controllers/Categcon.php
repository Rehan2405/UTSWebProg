<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function fantasy(){
        $Categ = Categories::all();
        return view ('home', compact('Book'));
    }
    public function bookdetail($id){
        $CategDetail = Categories::all()->where('id',$id);
        return view ('categories', compact('CategDetail'));
    }
}
