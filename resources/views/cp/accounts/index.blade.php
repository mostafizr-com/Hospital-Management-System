@extends('cp.layout.app')

@section('content')

<div class="row">
        <div class="col-md-12 col-lg-12 align-self-center">
                <div class="card bg-white m-b-30">
                    <div class="card-body new-user">
                        <h5 class="header-title mb-4 mt-0">Members Profiles</h5>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Sr</th>
                                        <th class="border-top-0">name</th>
                                        <th class="border-top-0">Phone</th>
                                        <th class="border-top-0">email</th>  
                                        <th class="border-top-0">Role</th>
                                        <th class="border-top-0">Action</th>

                                    </tr>
                                </thead>
                                <tbody>

 @foreach ($users as $key => $item)
 <tr>
    <td>{{ $key+1 }}</td>
    <td>
        <a href="javascript:void(0);">{{ $item->name }}</a>
    </td>
    <td>{{ $item->phone }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ ucfirst($item->role) }}</td>
    <td>
        <div class="clear-fix">
            <a href="{{ route('edit.account', $item->id) }}" class="badge badge-danger d-inline">Edit</a>
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