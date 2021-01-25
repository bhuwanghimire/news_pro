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
                                    <form method="put" action="{{route('setting.update')}}" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">System Name</label>
                                            <input type="text" name="name" value="{{$system_name}}"  class="form-control" id="name" >
                                        </div>

                                         <div class="form-group">
                                            <label for="featured">Favicon</label>
                                            <input type="file" class="form-control" id="favicon" name="favicon">   
                                        </div>

                                         <div class="form-group">
                                            <label for="featured">Front Logo</label>
                                            <input type="file" class="form-control" id="f" name="front_logo">   
                                        </div>

                                         <div class="form-group">
                                            <label for="featured">Admin Logo</label>
                                            <input type="file" class="form-control" id="" name="admin_logo">   
                                        </div>
                                     
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>

@endsection
