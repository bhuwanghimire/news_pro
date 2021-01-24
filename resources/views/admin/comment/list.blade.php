
       @extends('admin.layout.master')
       @section('content')
       <div class=" text-center">
        
        
       </div>
     
        <table id="example" class="table table-striped table-bordered" style="width:100%">
       
        <thead>
       
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Post</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Option</th>
                
            </tr>
        </thead>
        <tbody>
             @foreach($data as $datas)
            <tr>
            <td>{{$datas->id}}</td>
               
                <td>{{$datas->name}}</td>
                <td>{{$datas->post->title}}</td>
                <td>{{$datas->comment}}</td>
               
                <td>
                     <form method="put" action="{{route('status.comment',['id' => $datas->id])}}">
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
              
           
                  
            <a href="{{route('comment.replyform',$datas->post_id)}}" class="btn btn-info btn-md" role="button">Reply
             
              </td>
             
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

        