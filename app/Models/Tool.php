<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Tool extends Model
{
    use HasFactory;
    protected $table = "tool";

    protected $fillable = [
        'purchase_date', 'itemId', 'name', 'rfId', 'category_id', 'location_id', 'is_owned',
        'status', 'model', 'serial', 'purchase_date', 'price', 'company_id', 'user_id'
    ];

    
//--------date format----------
    public function setPurchaseDate($value)
    {
        $this->attributes['purchase_date'] = Carbon::createFromFormat('m/d/Y', $value)->formate('Y-m-d');
        //'this' means Tool class table, attribute means the column named 'purchase_date'
        //carbon is class having method createformformate in which the date formate is given
        // which is entered by user as well as the date itself $date.
        //formate is function wcich converts into your desired formate to save in table as undr attribute
    }

//--------User----------
    public function user()
    {
        return $this->belongsTo(User::class);
    }


//--------Ctegories----------
    public function category()  //this is relation 
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function getcategory()
    {
        return $this->category()->where('id', $this->category_id)->pluck('name');
    }

//--------SubCtegories----------
    public function subcategory()  //this is relation 
    {
        return $this->belongsTo(SubCategory::class,'subcategory_id', 'id');
    }
  
   //--------no direct relation to subcategory----------
    public function getsubcategory()
    {

        // ddd($this->category->dummy());         //working
        // ddd($this->category->findsubcategory());
        return $this->category->findsubcategory();
    }



    //--------Location----------
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function getLocation()
    {
        return $this->location()->where('id', $this->location_id)->pluck('name');
    }


    
    //--------Company----------
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function getcompany()
    {
        return $this->company()->where('id', $this->company_id)->pluck('name');
    }
}
