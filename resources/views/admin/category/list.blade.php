
       @extends('admin.layout.master')
       @section('content')
       <div class=" text-center">

         <a href="{{route('category.create')}}"><button type="submit" class="btn btn-primary " >Insert </button></a>
       </div>
     
        <table id="example" class="table table-striped table-bordered" style="width:100%">
       
        <thead>
       
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Status</th>
                <th>Option</th>
                
            </tr>
        </thead>
        <tbody>
             @foreach($category as $categories)
            <tr>
                <td>{{$categories->id}}</td>
                <td>{{$categories->name}}</td>
                <td>
                     <form method="put" action="{{route('status.category',['id' => $categories->id])}}">
                         {!! method_field('put') !!}

                                        @csrf
                                       @if($categories->status === 1)
                                          <button type="submit" class="btn btn-danger">Unpublish</button>
                                        @else

                                     <button type="submit" class="btn btn-success">Publish</button>
                                      @endif
                                    </form>
                </td>
                <td>
               <form action="{{route('category.update',$categories->id)}}" method="post">
               <a href="{{route('category.edit',$categories->id)}}" class="btn btn-success btn-md" role="button">Edit</a>
                   {{ method_field('DELETE') }}
                   @csrf
              <button type="submit" class="btn btn-danger">Delete</button></td>
               </form>
                
            </tr>
           
           @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
             
            </tr>
        </tfoot>
    </table>
       
    

      
        @endsection

        