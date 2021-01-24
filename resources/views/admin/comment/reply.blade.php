@extends('admin.layout.master')
@section('content')
<div class="row">



                        <div class="col-xl-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title">{{$page_name}}  </div>

                                </div>
                                
                                <div class="card-body ">
                                                    @if (count($errors) >0)
                                <ul class="list-group">
                                    @foreach ($errors->all() as $error)
                                        <li class="list-group-item text-danger">
                                            {{$error}}
                                        </li> 
                                    @endforeach
                                </ul>
                            @endif
                                    <form method="get" action="{{route('comment.reply',3)}}">
                                    @csrf

                                   

                                         <div class="form-group">
                                            <label for="title">Short Description</label>
                                         
                                             <textarea class="form-control" name="comment" rows="4" id="" placeholder="Enter Comment"></textarea>
                                        </div>
                                      
                                        <input type="hidden" value="{{$id}}"  name="post_id">

                                       
                                         


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>

@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
   
    <script>
             $(document).ready(function() {
            $('#summernote').summernote({
                 height: 100,
                 
            });
            });
    </script>
   
    

@endsection
