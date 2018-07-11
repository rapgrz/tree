<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    protected $table = 'form';

    public function childs() {
        return $this->hasMany('App\FormModel','parent_id','id') ;
    }
}
