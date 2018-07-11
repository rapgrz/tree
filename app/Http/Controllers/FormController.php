<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormModel;

class FormController extends Controller
{
    public function index()
    {
        $categories = FormModel::all();
        return view('welcome', array(
           'categories' => $categories
        ));
    }
    public function saveForm(Request $request)
    {
        $data = $request->all();
        $form = new FormModel();
        $form->name = $data['name'];
        $form->parent_id = $data['category_id'];

        $form->save();
        return back();
    }
}
