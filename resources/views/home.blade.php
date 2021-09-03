@extends('layouts.app')

@section('content')
<div class="container">
    
    <!-- Header -->
    <section class="border-bottom">
        <div class="text-md-start">
            <h4 class="text-primary fw-bold">Tools</h4>
        </div>
    </section>

    <!-- top button section -->
    <section class="py-3">
        <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-4 my-1">
            <div class="col-md-6 d-md-flex justify-content-md-start">
                <a href="{{route('tool.create')}}"><button type="button" class="btn btn-primary">New</button></a>
                <button type="button" class="btn btn-primary mx-md-2  my-xs-5">Inventory Review</button>
            </div>
            
            <div class="col-md-6 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-success mx-md-2">Print</button>
                <button type="button" class="btn btn-success my-xs-5">Export</button>
            </div>
        </div>
    </section>


<!-- search section -->
    <section class="py-1">
    <form >
    @csrf
        <div class="row justify-content-end">
            <div class="col-md-4 col-sm-6 ">
                <input class="form-control  ml-sm-4" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-md-1 col-sm-2 mr-lg-2 mr-md-3">
                <button class="btn btn-outline-success" type="submit">Search</button>   
            </div>
       
        </div>
        </form>
    </section>

    <!-- Main Table section -->
    <section class="py-2">    
        @include('table')
    </section>


@endsection
