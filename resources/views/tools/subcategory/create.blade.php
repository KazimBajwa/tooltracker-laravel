@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 border-bottom mb-3">
        <div class="col-md-10">
            <h4 class="text-primary my-2 mr-md-5">Add New Subcategory</h4>
        </div>
        <div class="col-md-2 d-flex justify-content-end my-2">
            <a href="{{route('categ.index')}}"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
    </div>


<!-- ---------------form-------------------- -->
    <form action="{{route('subcateg.store', $categId)}}" method="POST">
    @csrf
        <div class="row justify-content-center mb-3"> 
            <Strong><label for="SubCategory" class="form-label">Sub Category</label></Strong>    
            <div class="col-md-6">
                <input type="text" class="form-control" name="subCategory" autocomplete="on">
                
            </div>
        </div>
        <div class="d-flex justify-content-center"><button type="submit" class="btn btn-success" name="newAd">Add to Store</button></div>
    </form>
@endsection