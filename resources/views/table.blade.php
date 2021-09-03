<table class="table  table-sm table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Tool ID</th>
      <th scope="col">Name</th>
      <th scope="col">RF ID</th>
      <th scope="col">Category</th>
      <th scope="col">Sub-Category</th>
      <th scope="col">Location</th>
      <th scope="col">Owned</th>
      <th scope="col">Status</th>
      <th scope="col">Model</th>
      <th scope="col">Serial</th>
      <th scope="col">DOP</th>
      <th scope="col">Price</th>
      <th scope="col">Company</th>
      <th scope="col">Last Updated</th>
      <th scope="col">Link</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($tool as $tools)
    <tr>
   
        <th class="align-middle" scope='row'>{{$tools->itemId}}</th>
        <td class="align-middle">{{$tools->name}}</td>
        <td class="align-middle">{{$tools->rfId}}</td>
        <td class="align-middle">{{$tools->category->name}}</td>
        <td class="align-middle">{{$tools->subcategory->name}}</td>
        <td class="align-middle">{{$tools->location->name}}</td>
        <td class="align-middle">{{$tools->is_owned}}</td>
        <td class="align-middle">{{$tools->status}}</td>
        <td class="align-middle">{{$tools->model}}</td>
        <td class="align-middle">{{$tools->serial}}</td>
        <td class="align-middle">{{$tools->purchase_date}}</td>
        <td class="align-middle">{{$tools->price}}</td>
        <td class="align-middle">{{$tools->company->name}}</td>
        <td class="align-middle">{{$tools->updated_at}}</td>
        <td class="align-middle"><a href="">link</a></td>
        <td class="align-middle">
          <a href="{{route('tool.edit', $tools->id)}}">
            <button type="submit" class="btn btn-link"> 
              <img src="{{'images/edit-icon.png'}}" alt="delimage" width="15" height="15"> 
            </button>
          </a>
          
        
        <!-- <form action="{{route('tool.edit', $tools->id.'/edit')}}" method="get">
          @csrf -->
          
          <!-- </form> -->
        </td>
        <td class="align-middle">
          <form action="{{route('tool.destroy', $tools->id)}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-link"> <img src="{{'images/del-icon.jpg'}}" alt="delimage" width="10" height="10"> </button> 
          </form>
        </td>
    </tr>  
    @endforeach                             
  </tbody>
</table>