@extends('layouts.app')
@section('content')

<div class="container">
    
    <!-- Header -->
    <section class="border-bottom">
        <div class="text-md-start">
            <h4 class="text-primary fw-bold">Category Manager</h4>
        </div>
    </section>

    <!-- top button section -->
    <section class="py-1">
        <div class="row  row-cols-1 row-cols-sm-1 row-cols-md-2 my-1">
            <div class="col-lg-6 d-flex justify-content-md-start">
                <a href="{{route('categ.create')}}"><button type="button" class="btn btn-primary">Add New Category</button></a>
            </div>
            <div class="col-lg-6 d-flex justify-content-md-end pr-4">
                <form >
                @csrf
                    <div class="row justify-content-end mt-sm-1">
                        <div class="col-sm-9 pr-0">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col-sm-3 pl-1">
                            <button class="btn btn-outline-success" type="submit">Search</button>   
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <!-- Main Table section -->
    <section class="py-2">    
        
        @include('tools.category.table')

    </section>

@endsection




