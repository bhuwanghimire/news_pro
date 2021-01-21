@extends('admin.layout.master')
@section('content')
<div class="row">



                        <div class="col-xl-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> Simple Form </div>
                                </div>
                                <div class="card-body ">
                                    <form method="post" action="{{route('profile.store')}}">
                                    @csrf
                                        <div class="form-group">
                                             <label for="exampleFormControlSelect1">Choose Profile Avatar</label><br>
                                                <input type="file" name="avatar" class="" id="file" >
                                        </div>

                                          <div class="form-group">
                                            <label for="About">About </label>
                                            <textarea name="about" class="form-control" id="about" rows="3"></textarea>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label for="facebook">Facebook Link</label>
                                             <input type="facebook" name="facebook" class="form-control" placeholder="Facebook Link" id="facebook">
                                        </div>

                                         <div class="form-group">
                                            <label for="facebook">Youtube Link</label>
                                             <input type="youtube" name="youtube" class="form-control" placeholder="Youtube Link" id="facebook">
                                        </div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>

@endsection
