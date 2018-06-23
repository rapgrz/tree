<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormModel;
use Illuminate\Support\Facades\Mail;


class FormController extends Controller
{
    public function saveForm(Request $request){
        $data = $request->all();
        $form = new FormModel();
        $form->device_Id = $data['deviceId'];
        $form->latitude = $data['latitude'];
        $form->longitudes = $data['longitude'];
        $form->select = $data['select'];
         /*if ($data['select'] == 'Work'){
           $info = User::all();

             foreach ($info as $inf){
                 Mail::to($inf->email)->send(new FormMail());
             }


        }*/
        $form->save();
        return view('welcome');
    }

}