<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'book';
    public $timestamps = false;
    const CREATED_AT = 'created';
    
    protected $fillable = [
        "name", "author", "category_id", "published_date", "user", "available"
        ];

    public function category(){
    	return $this->belongsTo('App/Category','category_id');
    }
}