@extends('cp.layout.app')

@section('content')


<div class="row clearfix">
        <div class="col-12">
            <div class="card m-b-30">
       
                <div class="card-body">
                <h4 class="mt-0 header-title">Meta Scripts</h4>
                <p class="text-muted m-b-30 font-14">
                        Fill all the fields giving correct informations
                </p>
                        
                        
                    <form method="post" action="{{ route('save_scripts') }}" class="form-horizontal">
                     @csrf
                     @method('PUT')
                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="password_2">Google Analytics</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                              <textarea class="form-control" name="google_analytics" placeholder="Enter google analytics code" rows="6">{!! $option->google_analytics !!}</textarea>
                                        </div>
                                        <div class="help-info">Copy and paste google analytics script</div>
                                    </div>
                                </div>
                        </div>

                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="password_2">Facebook SDK</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                              <textarea class="form-control" name="facebook_sdk" placeholder="Enter facebook sdk script" rows="6">{!! $option->facebook_sdk !!}</textarea>
                                        </div>
                                        <div class="help-info">Copy and paste Facebook SDK script</div>
                                    </div>
                                </div>
                        </div>

                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="password_2">General Javascripts</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                              <textarea class="form-control" name="general_javascripts" placeholder="Enter others javascripts" rows="10">{!! $option->general_javascripts !!}</textarea>
                                        </div>
                                        <div class="help-info">Copy and paste all javascripts codes here</div>
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

@endsection