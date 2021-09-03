<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


//----------------index-------------------//   
    public function index()
    {
        $loc=Location::all();
        // ddd($category);
        return view('tools.location.index', ['locations' => $loc]);
    }


//-----------------create------------------------//
    public function create()
   {
        return view('tools.location.create');
   }


//-------------------Edit---------------------//
public function edit($id)
{
    $location=Location::findOrFail($id);
    return view('tools.location.edit', compact('location'));
}


//-------------------update---------------------//
public function update($id)
{
    
    request()->validate([
    'location'=>'required'
    ]);

    $loc = Location::findOrFail($id);
    $loc->name=request('location');
    $loc->save();
    return redirect('/location');
}


//-----------------store------------------------//
   public function store()
   {
        
        request()->validate([
        'location'=>'required'
        ]);
        $loc=Location::create([
           'name'  => request('location'),
            ]); 
        $loc->save();
       return redirect('/location');           
   }


//----------------destroy-------------------//
    public function destroy($id)
     {        
        $loc=Location::findorFail($id);
        $loc->delete($id);
        return redirect('/location');
     }
}
