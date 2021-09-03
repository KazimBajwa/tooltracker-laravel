<table class="table table-hover table-sm table-bordered">
    <thead>
        <tr>
            
            <th scope="col" style="width: 50%">Name</th>
            <th scope="col" style="width: 30%">Type</th>
            <th scope="col" style="width: 10%" class="text-center">Edit</th>
            <th scope="col" style="width: 10%" class="text-center">delete</th>
        </tr>
    </thead>
    <tbody>
    <tr class="table-active">
        <th colspan="6" class="text-primary">{{$categories->count()}} | Categories</th>
    </tr>
    @foreach ($categories as $category)
    
    <tr>
        <!-- <th class="align-middle" scope='row'>{{$category->id}}</th>        -->
            <td colspan="1" class="table-active align-middle text-primary table-primary"><strong class="d-flex justify-content-between">{{$category->name}}</strong>     
            </td>
            <td colspan="3" class="table-active align-middle text-primary table-primary">
            <a href="{{route('subcateg.createId', $category->id)}}">
                    <button type="submit" class="btn btn-outline-success py-0">
                        
                        New Sub-Category
                    </button>
                </a>
                </td>
            
            
            @foreach($category->subcategory as $subcateg)
            @if($category->id == $subcateg->par_categ_id)
            <tr>
                
                <!-- <th class="align-middle" scope='row'>1</th> -->
                <td class="align-middle pl-3">{{$subcateg->name}}</td>
                <td class="align-middle">Sub-Category</td>
                <td class="align-middle text-center">
                    <a href="#">
                        <button type="submit" class="btn btn-link"> <img src="{{'images/edit-icon.png'}}" alt="delimage" width="15" height="15"> 
                        </button>
                    </a>
                </td>

                <td class="align-middle text-center">
                    <form action="{{route('subcateg.destroy', $subcateg->id)}}" method="post">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn text-nowrap "> <img src="{{'images/del-icon.jpg'}}" alt="delimage" width="10" height="10"> </button> 
                    </form>
                </td>
            </tr>
        @endif
        @endforeach
            
    </tr>  

    @endforeach
    </tbody>
</table>

    
                        