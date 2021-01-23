@extends('admin.layout.master')
@section('content')
<div class="row">



                        <div class="col-xl-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title">c  </div>

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
                                    <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                                    @csrf

                                     <div class="form-group">
                                            <label for="title">Title</label>
                                             <input type="text" name="title" class="form-control" placeholder="Enter Title" id="facebook">
                                        </div>
                                            <div class="form-group">
                                            <label for="exampleFormControlSelect1">Example select</label>
                                            <select class="form-control" name="category_id" id="ff">
                                                 <option selected>Open this select menu</option>
                                                 @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label for="title">Short Description</label>
                                         
                                             <textarea class="form-control" name="short_description" rows="4" id="" placeholder="Enter short Description"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="title"> Description</label>
                                             <textarea  name="description" rows="4" class="form-control" id="summernote" placeholder="Enter Description" ></textarea>
                                        </div>

                                        
                                         <div class="form-group">
                                            <label for="featured">Featured image</label>
                                            <input type="file" class="form-control" id="featured_image" name="featured_image">   
                                        </div>

                                       
                                         


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
