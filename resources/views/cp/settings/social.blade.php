@extends('cp.layout.app')

@section('content')


<div class="row clearfix">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                <h4 class="mt-0 header-title">Social Integration</h4>
                <p class="text-muted m-b-30 font-14">
                        Fill all the fields giving correct informations
                </p>


                    <form method="POST" action="{{ route('save_social') }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Faceboo App ID</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="facebook_app_id" class="form-control" value="{{ $option->facebook_app_id }}" placeholder="Enter facebook app id">
                                    </div>
                                    <div class="help-info">Copy and paste facebook app id here</div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password_2">Faceboo App Secret</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="facebook_app_secrete" class="form-control" value="{{ $option->facebook_app_secrete }}" placeholder="Enter facebook secrete key">
                                    </div>
                                    <div class="help-info">Copy and paste facebook app secret here</div>
                                </div>
                            </div>
                        </div>

                        <hr>
    
                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="password_2">Google Client id</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="google_client_id" class="form-control" value="{{ $option->google_client_id }}" placeholder="Enter google client id">
                                        </div>
                                        <div class="help-info">Copy and paste google client id here</div>
                                    </div>
                                </div>
                        </div>   

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password_2">Google Client secret</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="google_client_secret" class="form-control" value="{{ $option->google_client_secret }}" placeholder="Enter Keywords">
                                    </div>
                                    <div class="help-info">Copy and paste google client secret here</div>
                                </div>
                            </div>
                        </div>   

                        <hr>
    
    
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