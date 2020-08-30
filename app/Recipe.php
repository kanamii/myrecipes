<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $guarded = array('id');

    // 
    public static $rules = array(
        'name' => 'required',
        'category' => 'required',
        'introduction' => 'required',
        'item1' => 'required',
        'quantity1' => 'required',
        'step1' => 'required',
    );
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
