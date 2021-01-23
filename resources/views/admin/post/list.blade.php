
       @extends('admin.layout.master')
       @section('content')
       <div class=" text-center">
        
         <a href="{{route('post.create')}}"><button type="submit" class="btn btn-primary " >Insert </button></a>
       </div>
     
        <table id="example" class="table table-striped table-bordered" style="width:100%">
       
        <thead>
       
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Total Views</th>
                <th>Status</th>
                <th>Hot news</th>
                <th>Option</th>
                
            </tr>
        </thead>
        <tbody>
             @foreach($data as $datas)
            <tr>
            <td>{{$datas->id}}</td>
                <td>
                    @if(file_exists(public_path('/post/').$datas->thumb_image))
                    <img src="{{asset('post')}}/{{$datas->thumb_image}}" alt="" class="img-fluid" srcset="">
                </td>
                @endif
                <td>{{$datas->title}}</td>
                <td>{{$datas->user->name}}</td>
                <td>{{$datas->view_count}}</td>
               
                <td>
                     <form method="put" action="{{route('status.post',['id' => $datas->id])}}">
                         {!! method_field('put') !!}

                                        @csrf
                                       @if($datas->status === 1)
                                          <button type="submit" class="btn btn-danger">Unpublish</button>
                                        @else

                                     <button type="submit" class="btn btn-success">Publish</button>
                                      @endif
                                    </form>
                </td>
                 <td>
                     <form method="put" action="{{route('hot.post',['id' => $datas->id])}}">
                         {!! method_field('put') !!}

                                        @csrf
                                       @if($datas->hot_news === 1)
                                          <button type="submit" class="btn btn-danger">No</button>
                                        @else

                                     <button type="submit" class="btn btn-success">Yes</button>
                                      @endif
                                    </form>
                </td>
                <td>
               <form action="{{route('post.destroy',$datas->id)}}" method="post">
               <a href="{{route('post.edit',$datas->id)}}" class="btn btn-success btn-md" role="button">Edit</a>
                   {{ method_field('DELETE') }}
                   @csrf
              <button type="submit" class="btn btn-danger">Delete</button></td>
               </form>
                
            </tr>
           
           @endforeach
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
             
            </tr>
        </tfoot> -->
    </table>
       
    

      
        @endsection

        