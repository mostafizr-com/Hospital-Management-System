@extends('cp.layout.app')

@section('content')
<div class="row clearfix">
    <div class="col-xs-12 col-sm-3">
        <div class="card profile-card">
            <div class="profile-header">&nbsp;</div>
            <div class="profile-body">
                <div class="image-area">
                    <img src="{{ asset('admin/images/user-lg.jpg') }}" alt="AdminBSB - Profile Image" />
                </div>
                <div class="content-area">
                    <h3>Marc K. Hammond</h3>
                    <p>Web Software Developer</p>
                    <p>Administrator</p>
                </div>
            </div>
        </div>


    </div>
    <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                        <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                            <form class="form-horizontal" action="{{ route('save_profile') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Name Surname</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="name" placeholder="Name Surname" value="{{ $user->name }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="email" class="form-control" id="Email" name="email" placeholder="Email" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <textarea class="form-control" id="InputExperience" name="brief" rows="3" placeholder="Experience">{{ $user->brief }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputSkills" class="col-sm-2 control-label">Skills</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="InputSkills" name="skills" value="{{ $user->skills }}" placeholder="Skills">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                            <form class="form-horizontal" action="{{ route('change_pass') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="old_password" class="col-sm-3 control-label">Old Password</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">New Password</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password" class="col-sm-3 control-label">New Password (Confirm)</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="New Password (Confirm)">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-danger">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection