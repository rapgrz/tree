<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormModel;

class TreeController extends Controller
{
    public function cats()
    {
        $categories = FormModel::where('parent_id', '=', 0)->get();
        $allCategories = FormModel::pluck('name','id')->all();
        return view('tree',compact('categories','allCategories'));
    }

}
