@extends('admin.layout.master')
@section('content')
<div class="row">



                        <div class="col-xl-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title">  </div>
                                </div>
                                <div class="card-body ">
                                    <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                                    @csrf

                                     <div class="form-group">
                                            <label for="title">Title</label>
                                             <input type="text" name="titile" class="form-control" placeholder="Enter Title" id="facebook">
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
                                         
                                             <textarea class="form-control" name="short_description" rows="4" id="summernote" placeholder="Enter short Description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="title"> Description</label>
                                             <textarea type="text" name="description" rows="5" class="form-control" placeholder="Enter Description" id="facebook"></textarea>
                                        </div>

                                        
                                         <div class="form-group">
                                            <label for="featured">Featured image</label>
                                            <input type="file" class="form-control" id="featured" name="featured">   
                                        </div>

                                       
                                         


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>

@endsection
