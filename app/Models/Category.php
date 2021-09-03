<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table = 'categories';
    protected $fillable = ['name']; //mass assign avoid

    //--------relation to Tool----------
    public function tools()
    {
        return $this->belongsToMany(Tool::class, 'category_id', 'id');
    }
    
    // --------relation to SubCtegories----------
    public function subcategory()
    {
        return $this->hasMany(SubCategory::class, 'par_categ_id', 'id');
    }

    public function dummy()
    {
        return 'hi there you have accessed the dummy funcntion';

    }

    public function findsubcategory()
    {
        return $this->subcategory->pluck('name');
        // return $this->subcategory->pluck('name');
    }

}
