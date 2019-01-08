@extends('cp.layout.app')

@section('content')

<div class="row clearfix">
        <div class="col-12">
            <div class="card m-b-30">

                <div class="card-body">
                    <h4 class="mt-0 header-title">Add new stuff</h4>
                    <p class="text-muted m-b-30 font-14">
                        Fill all the fields giving correct informations
                    </p>

                    <form method="post" action="{{ route('store.stuff') }}" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Stuff's name</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" v-model="name" name="name" class="form-control" placeholder="Enter stuff name here">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Mobile No</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone no">
                                        </div>
                                    </div>
                                </div>
                        </div>
              
                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Position</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="position" class="form-control" placeholder="Enter position">
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
                                            <input type="text" name="skills" class="form-control" placeholder="Enter skills here">
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
                                <label for="image">Stuff profile image</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="image" id="image" class="form-control logo-upload">
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

