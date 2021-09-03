<?php

namespace App\Http\Controllers;
use App\Models\Tool;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Location;
use App\Models\Company;
use App\Models\User;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
//-------------------index---------------------//    
    public function index()
    {
        $tool = Tool::with(['category', 'subcategory', 'location', 'company'])->get();

        // ddd($tools);
        // foreach ($tool as $tools){
        //     echo "toll name is  {$tools->name} <br>";
            // echo "Category name is  {$tools->category->name} <br>"; 
            // echo "location name is {$tools->location->name} <br>";
        //     echo "company name is   {$tools->company->name} <br>";
            // echo "subCategory name is {$tools->category->subcategory->pluck('name')} <br>";  
            // echo "subCategory name is {$tool->category->subcategory->name} <br>";
        // }
        return view('home', ['tool'=> $tool]);
    }

    // $users = User::with(['posts' => function ($query) {
    //     $query->select(['id', 'user_id', 'title']); // fields from posts table        // user_id is needed so eloquent can match the post with its parent user
    // }, 'posts.comments' => function ($query) {
    //     $query->select(['id', 'post_id', 'title', 'body']); // fields from comments table, 
    //     // post_id is needed so eloquent can match the comment with its parent post
    // }])->get(['id', 'email']); 



//-------------------create--------------//
    public function show($id)
    {
        // $tools=Tool::first();
            
        $tools=Tool::findOrFail(2);
        // dump($tools=Tool::findOrFail(2));



        //.........Eager Loading.............
        // $tools=Tool::all();            //working
        // foreach ($tools as $toolss) {
        //    echo ($toolss->category->name);
        // }

        // $tools =Tool::with('category')->get();       //working
        // foreach ($tools as $tools) {
        //     echo $tools->category->name;
        // }


        // $toolname=$tools->where('id', $tools->id)->pluck('Name');   //working
        // dump($toolname=$tools->pluck('Name')->unique());

    
        $cat=$tools->getcategory();                 //working
        // dump($cat=$tools->getcategory());

        // $subcat=$tools->getsubcategory();        //not working subcategory table is empty
        $subcat=$tools->getsubcategory();   //working here
        // dump($tools->category->dummy());     //working
        // dump($tools->category->subcategory()->pluck('name')); //perfect woking
        // dump($tools->category->subcategory->pluck('name')); //perfect woking

        $loca=$tools->getLocation();                     //working
        // dump($loca=$tools->getLocation());

        $comp=$tools->getcompany();                     //working
        // dump($com=$tools->getcompany());

    
        $data = array($tools->id, $tools->itemId, $tools->name, $tools->rfId, $cat, $subcat, $loca, 
        $tools->is_owned, $tools->status, $tools->model, $tools->serial, $tools->purchase_date,
        $tools->price, $comp, $tools->updated_at);
        // $data=['tool_name' =>$toolname, 'category'=>$cat, 'subcate'=>$subcat, 'comp'=>$comp, 'loca'=>$loca]; //working
        // dump($data);
        return view('home', ['data'=> $data]);

        // $user=User::first();
        // dump($user);                          //working
        // dump($user->tools);            //working
        // $user->tools->pluck('Name');   //working
        // return view('home');
    }

//-------------------create--------------//
    public function create()
    {
        return view('tools.create');
    }


//-------------------store--------------//
    public function store()
    {
        echo "you are in store function";        
        
        ////--------instance to store in categori table---------
        // request()->validate([
        // 'category'=>'required', 'subCategory'=>'required', 'location'=>'required',
        // 'toolCompanyName'=>'required', 'itemId'=>'required',
        // 'nameOfItem'=>'required','rfId'=>'required','owned'=>'required', 'status'=>'required', 
        // 'model'=>'required', 'serial'=>'required', 'dateofPurchase'=>'required', 'price'=>'required'
        //  ]);


        //  request()->validate([
        //     'itemId'=>'required',
        //     'nameOfItem'=>'required','rfId'=>'required','owned'=>'required', 'status'=>'required', 
        //     'model'=>'required', 'serial'=>'required', 'dateofPurchase'=>'required', 'price'=>'required'
        // ]);


        // $cat= Category::create([
        //     'name'  => request('category')   
        // ]);

        // $cat=new Category();  //conventional way to store data
        //  $cat->fill([
        //      'name'  => request('Category')   
        //  ]);
        //  $cat->save();
        //  ddd($cat->id);
         

        //--------instance to store in subcategori table---------
        // $subcat=SubCategory::create([
        //     'name'  => request('subCategory'),
        //     'par_categ_id' => $cat->id 
        // ]);       
        // $subcat->save();



        //--------instance to store in location table---------
        // $loca=Location::create([
        //     'name'  => request('location'),
        // ]);       
        // $loca->save();


        //--------instance to store in company table---------
        // $comp=Company::create([
        //     'name'  => request('toolCompanyName'),
        // ]);       
        // $loca->save();


        //--------instance to store in Toolmanager table---------
        $tools=Tool::create([
            'itemId'       => request('itemId'),
            'name'         => request('nameOfItem'),
            'rfId'         => request('rfId'), 
            'category_id'  => 1,
            'subcategory_id'  => 1,
            'location_id'  => 1,
            'is_owned'     => request('owned'),
            'status'       => request('status'),
            'model'        => request('model'),
            'serial'       => request('serial'),
            'purchase_date' => request('dateofPurchase'),
            'price'        => request('price'),
            'company_id'   => 1,
            'user_id'      => 1
            
        ]);
        ddd($tools);
        $tools->save();
        return redirect('/tool');
           
    }


  
//-------------------Edit---------------------//
    public function edit($id)
    {
        // $tool=Tool::findOrFail($id);
        // $cat=$tool->getcategory();
        $tool = Tool::with(['category', 'subcategory', 'location', 'company'])->where('id', $id)->first();
        // ddd($tool->id);
        // above return the object with id in where function. but does not query the   
        return view('tools.edit', compact('tool'));
    }
  
  
//-------------------update---------------------//
    public function update($id)
    {
        
        //--------instance to update the changes---------
        request()->validate([
        'category'=>'required', 'subCategory'=>'required', 'location'=>'required',
        'toolCompanyName'=>'required', 'itemId'=>'required',
        'nameOfItem'=>'required','rfId'=>'required','owned'=>'required', 'status'=>'required', 
        'model'=>'required', 'serial'=>'required', 'dateofPurchase'=>'required', 'price'=>'required'
         ]);

        $tool = Tool::with(['category', 'category.subcategory', 'location', 'company'])->where('id', $id)->first();

        
        $tool->category->subcategory->name=request('subCategory');
        $tool->category->subcategory->par_categ_id=$tool->category->id;
        // subcategory->save();
        // $tool->category->subcategory->save();
        // ddd($tool->category->subcategory->name);
        
        
        $tool->category->name=request('category');
        $tool->category->save();
        // ddd($tool->category->name);
       

        $tool->location->name=request('location');
        $tool->location->save();

        $tool->itemId       =request('itemId');
        $tool->name         = request('nameOfItem');
        $tool->rfId         = request('rfId'); 
        $tool->category_id  = $tool->category->id;
        $tool->location_id  = $tool->location->id;
        $tool->is_owned     = request('owned');
        $tool->status       = request('status');
        $tool->model        = request('model');
        $tool->serial       = request('serial');
        $tool->purchase_date = request('dateofPurchase');
        $tool->price        = request('price');
        $tool->company_id   = $tool->location->id;

        $tool->save();


        
        
        return redirect('/tool');
    }

//-------------------delete---------------------//
     public function destroy($id)
     {
        
        $tool=Tool::findorFail($id);
        // $categ = Category::findorfail($tool->category_id);
        // SubCategory::where('par_categ_id', $categ->id)->delete();
        // Category::where('id', $tool->category_id)->delete();
        // Location::where('id', $tool->location_id)->delete();
        // Company::where('id', $tool->company_id)->delete();
        $tool->delete($id);
        // Tool::destroy($id);
        

        return redirect('tool');
     }
}



