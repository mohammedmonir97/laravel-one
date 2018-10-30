<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table= 'departments';
    protected $fillable =[
        'dep_name_ar',
        'dep_name_en',
        'icon',
        'description',
        'keyword',
        'parent_id',
    ];

    public function parents(){
        return $this->hasMany('App\model\Department','id','parent_id');
    }
}
