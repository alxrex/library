<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $timestamps = false;
    
    protected $fillable = [
        'name','description'
    ];
    
    /**
    * Get the Books for CAtegory.
    */
    public function books()
    {
        return $this->hasMany('App\CategoryBook');
    }
}
