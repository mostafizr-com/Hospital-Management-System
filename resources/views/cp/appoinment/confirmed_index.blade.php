@extends('cp.layout.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-body new-user">
                    <h5 class="header-title mb-4 mt-0">New Appoinments</h5>

                       <table id="appoinmet-table" class="table table-bordered">

                            <thead>
                                <tr>
                                    {{-- <th class="border-top-0">Sr</th> --}}
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Phone no</th>
                                    <th class="border-top-0">Department</th>
                                    <th class="border-top-0">Doctor</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Time</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                     

                        </table>  
                 
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        $('#appoinmet-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{!! route('get.confimed') !!}",
            columns: [
                { data: 'name'},
                { data: 'email'},
                { data: 'phone'},
                { data: 'department_id' },
                { data: 'doctor_id' },
                { data: 'appoinment_date' },
                { data: 'appoinment_time'},
                { data: 'action', orderable: false, searchable: false }
            ]
        });   
    </script>
@endpush