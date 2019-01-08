@extends('cp.layout.app')

@section('content')

<div class="row clearfix" id="vueapp">
    <div class="col-12">
        <div class="card m-b-30">

            <div class="card-body">
                <h4 class="mt-0 header-title">Add user account</h4>
                <p class="text-muted m-b-30 font-14">
                    Fill all the fields giving correct informations
                </p>
                <p class="text-muted m-b-30 font-16">
                   <strong>Note: </strong> All (<strong>*</strong>) marked fields are required.
                </p>
                <form method="post" action="{{ route('store.account') }}" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Name (*)</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="name" class="form-control" placeholder="Enter department name here">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Email (*)</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email" class="form-control" placeholder="Enter email here">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Phone (*)</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
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
                            <label for="image">Image</label>
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
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password_2">Description</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                            <textarea class="form-control" name="brief" rows="5" placeholder="Enter a brief description"></textarea>
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

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">User Role (*)</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <select name="role" class="select2 form-control mb-3 custom-select select2-hidden-accessible" style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true">
                                    <option value="stuff">Stuff</option>
                                    <option value="manager">Manager</option>
                                    <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                                     

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Password (*)</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password here">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Password (confirm) (*)</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create Account</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
<script>

    // $(document).ready(function() {
        
    //     var postImageUrl = function(input) {
    //         if (input.files && input.files[0]) {
    //             var reader = new FileReader();
    
    //             reader.onload = function (e) {
    //                 $('.post-image').attr('src', e.target.result);
    //             }
                
    //             reader.readAsDataURL(input.files[0]);
    //         }
    //     }
    
    //     $(".image-upload").on('change', function(){
    //         postImageUrl(this);
    //     });
    // });
    
    
var container = new Vue({

        el: '#vueapp',
        data:{
            name:"",
            // edit:true,
        },
        filters:{
            permalink: function(e){
                        var str = e.trim();
                        str = str.toLowerCase();
                        permalink = str.replace(/[\s?.,='"^#*@$%><!]/g, '-'); 
                        permalink = permalink.replace(/-+/g,'-');     
                        permalink = permalink.substring(0, 25);
                        permalink = permalink.trim();
                        return permalink;
            
                    }
        }
});

// $(document).ready(function(){
//        $('#remove_disable').on('click', function(){
//             $('#slug').removeAttr('readonly');
//             $('#slug').removeClass('readonly'); 
//             $('#remove_disable').hide();
//        });
// });

</script> 



</div>


@endsection
