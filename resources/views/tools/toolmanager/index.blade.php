@extends('layouts.app')
@section('content')

<div class="container">

<!-- top section -->
    <section class="border-bottom">
        <div class="text-md-start">
            <h4 class="text-primary fw-bold">Dashboard</h4>
        </div>
    </section>


<!-- main body of dashboard -->


<div class="container">
  <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-4 my-3 font-weight-bold ">
    <div class="col">
        <a href="{{route('tool.index')}}">
            <img src="images/maindata-icon.png" alt="manin table" width=20% height=100%>
            Tool Tracker
        </a>
    </div>
    <div class="col">
        <a href="#">
            <img src="images/setting-icon.png" alt="manin table" width=20% height=100%>
            Setting
        </a>
    </div>
    <div class="col">
        <a href="{{route('categ.index')}}">
            <img src="images/categ-icon.jpg" alt="manin table" width=20% height=100%>
            Category
        </a>
    </div>
    <div class="col">
        <a href="{{route('loc.index')}}">
            <img src="images/Toollocation-icon.jpg" alt="manin table" width=20% height=100%>
            Location
        </a>
    </div>
  </div>
</div>






<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 my-3 font-weight-bold ">
    <div class="col">
        <a href="{{route('comp.index')}}">
            <img src="images/company-icon.png" alt="maintable" width=20% height=100%>
            Company
        </a>
    </div>
    <div class="col">
        <a href="{{route('tool.index')}}">
            <img src="images/company-icon.png" alt="maintable" width=20% height=100%>
            others
        </a>
    </div>
    <div class="col">
        <a href="{{route('tool.index')}}">
            <img src="images/company-icon.png" alt="maintable" width=20% height=100%>
            others
        </a>
    </div>
    <div class="col">
        <a href="{{route('tool.index')}}">
            <img src="images/company-icon.png" alt="maintable" width=20% height=100%>
            others
        </a>
    </div>
</div>
</div>



   
</div>  

@endsection