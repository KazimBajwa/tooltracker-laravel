<table class="table table-hover table-sm table-bordered">
    <thead>
        <tr class="table-active">
            
            <th scope="col">Name</th>
            <th scope="col" class="text-center">Edit</th>
            <th scope="col" class="text-center">delete</th>
        </tr>
    </thead>
    <tbody>
    <tr class="table-active">
        <th colspan="6" class="text-primary">{{$companies->count()}} | Companies</th>
    </tr>
    @foreach ($companies as $company)
    
    <tr>
        
                
                <!-- <th class="align-middle" scope='row'>1</th> -->
                <td class="align-middle pl-3">{{$company->name}}</td>
             
                <td class="align-middle text-center">
                    <a href="{{route('comp.edit', $company->id)}}">
                        <button type="submit" class="btn btn-link"> <img src="{{'images/edit-icon.png'}}" alt="delimage" width="15" height="15"> 
                        </button>
                    </a>
                </td>

                <td class="align-middle text-center">
                    <form action="{{route('comp.destroy', $company->id)}}" method="post">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn text-nowrap "> <img src="{{'images/del-icon.jpg'}}" alt="delimage" width="10" height="10"> </button> 
                    </form>
                </td>
     
            
    </tr>  

    @endforeach
    </tbody>
</table>