@extends('cp.layout.app')

@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
            <h4 class="mt-0 header-title">General Options</h4>
            <p class="text-muted m-b-30 font-14">
                    Fill all the fields giving correct informations
            </p>

                <form method="post" action="{{ route('save_generel') }}" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PUT')
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Title</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="title" class="form-control" value="{{ $option->title }}" placeholder="Enter Company Title">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Slogan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="slogan" class="form-control" value="{{ $option->slogan }}" placeholder="Enter Company Slogan">
                                </div>
                                <div class="help-info">Company related small slogan</div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password_2">Keyowords</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="keywords" class="form-control" value="{{ $option->keywords }}" placeholder="Enter Keywords">
                                    </div>
                                    <div class="help-info">Seperate keyowds by ( , ) comma.</div>
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
                                          <textarea class="form-control" name="description" rows="5" placeholder="Enter a brief description">{!! $option->slogan !!}</textarea>
                                    </div>
                                    <div class="help-info">Write a brief description about the company</div>
                                </div>
                            </div>
                    </div>

                    <div class="row clear-fix">
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
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Company Logo</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="logo" id="logo" class="form-control logo-upload">
                                </div>
                                <div class="help-info">Upload company logo</div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save Data</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        
    
            var readlogoURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
        
                    reader.onload = function (e) {
                        $('.logo-avatar').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }
        
            $(".logo-upload").on('change', function(){
                readlogoURL(this);
            });
    
    });
    </script>

@endsection