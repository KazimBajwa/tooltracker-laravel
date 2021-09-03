@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="text-primary my-2 mr-md-5">Fill below form to add new tool in record!</h1>
        </div>
        <div class="col-md-2 d-flex justify-content-end my-2">
            <a href="{{route('home')}}"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
    </div>
    <form action="{{route('tool.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <strong><label for="ItemID" class="form-label">Item ID</label></strong>
                <input type="text" class="form-control" name="itemId" autocomplete="on">
                <div id="ItemIDhelp" class="form-text text-black-50">Assign an ID to item for record purpose.</div>
            </div>
        </div>   
        <div class="col-md-4">
            <div class="mb-3">
                <strong><label for="NameOfItem" class="form-label">Name</label></strong>
                <input type="text" class="form-control" name="nameOfItem" autocomplete="on">
                <div id="NameOfItemHelp" class="form-text text-black-50">Write full name of item.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <strong><label for="RfId" class="form-label">RF ID</label></strong>
                <input type="text" class="form-control" name="rfId" autocomplete="on">
                <div id="RfIdHelp" class="form-text text-black-50">Write full RF ID of item.</div>
            </div>
        </div>
    </div>

    <div class="row">   
        <div class="col-md-4">
            <div class="mb-3">
                <Strong><label for="Category" class="form-label">Category</label></Strong>
                <input type="text" class="form-control" name="category" autocomplete="on">
                <div id="CategoryHelp" class="form-text text-black-50">select Category.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <Strong><label for="SubCategory" class="form-label">Sub Category</label></Strong>
                <input type="text" class="form-control" name="subCategory" autocomplete="on">
                <div id="SubCategoryHelp" class="form-text text-black-50">select Sub Category.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <strong><label for="Location" class="form-label">Location of tool</label></strong>
                <input type="text" class="form-control" name="location" autocomplete="on">
                <div id="LocationHelp" class="form-text text-black-50">Add tool location.</div>
            </div>
        </div>
    </div>

    <div class="row">   
        <div class="col-md-4">
            <div class="mb-3">
                <Strong><label for="Owned" class="form-label d-block">Owned</label></Strong>
              
                <select style="width:100%" class="form-select mb-2 py-2 rounded" name="owned" aria-label=".form-select-lg example">
                    <option selected>select the option</option>
                    <option value="1">company owned</option>
                    <option value="0">Leased</option>
                </select>

                <div id="OwnedHelp" class="form-text text-black-50">Owned or on lease.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <Strong><label for="Status" class="form-label">Status</label></Strong>
                <!-- <input type="text" class="form-control" name="Status" autocomplete="on"> -->
                <input class="form-control" list="statusOptions"  name="status" placeholder="select the option">
                <datalist id="statusOptions">
                    <option value="operational">
                    <option value="Broken">
                    <option value="sent For Repaire">
                </datalist>
                <div id="StatusHelp" class="form-text text-black-50">Condition of the tool.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <strong><label for="Model" class="form-label">Model</label></strong>
                <input type="text" class="form-control" name="model" autocomplete="on">
                <div id="ModelHelp" class="form-text text-black-50">add complete Model number.</div>
            </div>
        </div>
    </div>


    <div class="row">   
        <div class="col-md-4">
            <div class="mb-3">
                <Strong><label for="Serial" class="form-label">Serial Number</label></Strong>
                <input type="text" class="form-control" name="serial" autocomplete="on">
                <div id="SerialHelp" class="form-text text-black-50">add complete serial number.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <Strong><label for="dateofPurchase" class="form-label">Purchase Date</label></Strong>
                <input id="dateofPurchase" type="date" class="form-control datepicker" name="dateofPurchase" autocomplete="on">
                <div id="dateofPurchaseHelp" class="form-text text-black-50">Tool Purhase date</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <strong><label for="Price" class="form-label">Price </label></strong>
                <input type="int" class="form-control" name="price" autocomplete="on">
                <div id="PriceHelp" class="form-text text-black-50">price in dollars.</div>
            </div>
        </div>
    </div>


    <div class="row">   
        <div class="col-md-4">
            <div class="mb-3">
                <Strong><label for="toolcompanyName" class="form-label">Company</label></Strong>
                <input type="text" class="form-control" name="toolCompanyName" autocomplete="on">
                <div id="toolcompanyName" class="form-text text-black-50">Manufacturer of tool.</div>
            </div>
        </div>
    </div>

       <div class="d-flex justify-content-end"><button type="submit" class="btn btn-success" name="newAdd">Add to record</button></div>
    </form>
</div>
@endsection
