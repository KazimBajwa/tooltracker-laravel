<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
//----------------index-------------------//   
    public function index()
    {
        $category=Category::with(['subcategory'])->get();
        // ddd($category);
        return view('tools.category.index', ['categories' =>$category]);
    }
    


//----------------craete-------------------//    
    public function create()
    {
        return view('tools.category.create');
    }


    
//----------------Store-------------------//
    public function store()
    {
        echo "you are in store function";        
        
        //--------instance to store in categori table---------
        request()->validate([
        'category'=>'required'
         ]);
        $cat= Category::create([
            'name'  => request('category')
        ]);
        $cat->save();
        return redirect('/category');
           
    }

}
