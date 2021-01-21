@extends('admin.layout.master')
@section('content')
<div class="row">



                        <div class="col-xl-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> {{$page_name}}</div>
                                </div>
                                <div class="card-body ">
                                    <form method="post" action="{{route('category.update',$category->id)}}">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Category</label>
                                            <input type="text" name="category" value="{{$category->name}}" class="form-control" id="category" >
                                        </div>
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>

@endsection
