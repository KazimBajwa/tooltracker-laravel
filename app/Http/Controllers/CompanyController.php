<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


//----------------index-------------------//   
    public function index()
    {
        $loc=Company::all();
        // ddd($category);
        return view('tools.company.index', ['companies' => $loc]);
    }


//-----------------create------------------------//
    public function create()
   {
        return view('tools.company.create');
   }


//-------------------Edit---------------------//
public function edit($id)
{
    $company=Company::findOrFail($id);
    return view('tools.company.edit', compact('company'));
}
 // here i am editing code to chedk git

//-------------------update---------------------//
public function update($id)
{
    
    request()->validate([
    'company'=>'required'
    ]);

    // $loc = Company::findOrFail($id);
    // $loc->name=request('company');
    // $loc->save();
    // return redirect('/company');
}


//-----------------store------------------------//
   public function store()
   {
        
        request()->validate([
        'company'=>'required'
        ]);
        $loc=Company::create([
           'name'  => request('company'),
            ]); 
        $loc->save();
       return redirect('/company');           
   }


//----------------destroy-------------------//
    public function destroy($id)
     {        
        $loc=Company::findorFail($id);
        $loc->delete($id);
        return redirect('/company');
     }
}
