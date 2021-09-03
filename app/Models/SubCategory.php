<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = ['name', 'par_categ_id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'par_categ_id', 'id');
    }


    public function tools()
    {
        return $this->belongsToMany(Tool::class, 'subcategory_id', 'id');
    }
}
