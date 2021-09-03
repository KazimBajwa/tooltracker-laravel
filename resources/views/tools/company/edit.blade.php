@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 border-bottom mb-3">
        <div class="col-md-10">
            <h4 class="text-primary my-2 mr-md-5">Edit Company</h4>
        </div>
        <div class="col-md-2 d-flex justify-content-end my-2">
            <a href="{{route('comp.index')}}"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
    </div>

    <form action="{{route('comp.update', $company->id)}}" method="POST">
    @csrf
    @method('put')
        <div class="row justify-content-center mb-3">   
            <Strong><label for="location" class="col-md-2 form-label">Location</label></Strong>
            <div class="col-md-6">
                <input type="text" class="form-control" name="company" value="{{$company->name}}" autocomplete="on">
            </div>
        </div>    
        <div class="d-flex justify-content-center"><button type="submit" class="btn btn-success" name="newAdd">save change</button></div>
    </form>
</div>
@endsection