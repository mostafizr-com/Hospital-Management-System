@extends('cp.layout.app')

@section('content')

<div class="row clearfix">
        <div class="col-12">
            <div class="card m-b-30">

                <div class="card-body">
                    <h4 class="mt-0 header-title">Add a new doctor</h4>
                    <p class="text-muted m-b-30 font-14">
                        Fill all the fields giving correct informations
                    </p>

                    <form method="post" action="{{ route('store.doctor') }}" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Name</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Enter full name here">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Phone no</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="phone" class="form-control" placeholder="Enter phone number">
                                    </div>
                                </div>
                            </div>
                        </div>                          

                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Skills</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="skills" class="form-control" placeholder="Enter all skills">
                                        </div>
                                    </div>
                                </div>
                        </div>   
                        
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Department</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <select name="department_id" class="select2 form-control mb-3 custom-select select2-hidden-accessible" style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true">
                                        <option>Select</option>
                                        @foreach ($departments as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
 
                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Degrees</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="degrees" class="form-control" placeholder="Enter Degrees">
                                        </div>
                                    </div>
                                </div>
                        </div>                        
    
                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="password_2">Description</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                              <textarea class="form-control" name="description" rows="5" placeholder="Enter a brief description"></textarea>
                                        </div>
                                        <div class="help-info">Write a brief description about the doctor</div>
                                    </div>
                                </div>
                        </div>

    
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Chamber schedule</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="schedule" class="form-control" placeholder="Enter chamber schedule">
                                    </div>
                                </div>
                            </div>
                        </div>  

                        {{-- <div class="row clear-fix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5"></div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <label for="logo">    
                                    <div class="card-body"> 
                                        @if($option->logo != "logo.png")  
                                            <img class="img-thumbnail logo-avatar" style="width:200px" 
                                            src="{{ url('storage/site_images/'.$option->site_image) }}">
                                        @else
                                            <img class="img-thumbnail logo-avatar" style="width:200px; overflow:hidden"
                                            src="{{ url('default/logo.png') }}">
                                        @endif 
                                    </div>
                                </label>
                            </div>
                        </div> --}}
    
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password_2">Profile Image</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="image" id="logo" class="form-control logo-upload">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-12">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create</button>
                                </div>
                            </div>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection