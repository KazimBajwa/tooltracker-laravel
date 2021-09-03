<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


//-----------------create------------------------//
    public function create($categId)
   {
        return view('tools.subcategory.create', ['categId' => $categId ]);
   }


//----------------Store-------------------//
    public function store($categId)
    {
        // $value="you are in subcateg store function";
        // ddd($value);
        echo "you are in subcateg store function"; 

       
        // request()->validate([
        //             'name'=>'required'
        //             ]);
        $subcat=SubCategory::create([
            'name'  => request('subCategory'),
            'par_categ_id' => $categId
        ]); 
        // ddd($subcat);      
        $subcat->save();
        return redirect('/category');           
    }

    
//----------------destroy-------------------//
    public function destroy($id)
     {
        
        $subcateg=SubCategory::findorFail($id);
        // SubCategory::destory($id);

        $subcateg->delete($id);
        return redirect('/category');
     }
}
