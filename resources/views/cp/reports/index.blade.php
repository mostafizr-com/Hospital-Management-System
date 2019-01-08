@extends('cp.layout.app')

@section('content')

<div class="row">
        <div class="col-md-12 col-lg-12 align-self-center">
                <div class="card bg-white m-b-30">
                    <div class="card-body new-user">
                        <h5 class="header-title mb-4 mt-0">Members Profiles</h5>
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="border-top-0" style="width:60px;">Member</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Phone</th>
                                        <th class="border-top-0">Skills</th>
                                        <th class="border-top-0">Degrees</th>
                                        <th class="border-top-0">Department</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

 @foreach ($doctors as $item)
 <tr>
    <td>
        <img class="rounded-circle" src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="user" width="40"> </td>
    <td>
        <a href="javascript:void(0);">{{ $item->name }}</a>
    </td>
    <td>{{ $item->phone }}</td>
    <td>{{ $item->skills }}</td>                                   
    <td>{{ $item->degress }}</td>
    <td>Madicine</td>
    <td>
        <div class="clear-fix">
            <a href="{{ route('edit_doctor', $item->id) }}" class="badge badge-danger d-inline">Edit</a>
            <a href="#" class="badge badge-success d-inline">View</a>
        </div> 
    </td>
</tr>       
 @endforeach
         
    
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
</div>

@endsection