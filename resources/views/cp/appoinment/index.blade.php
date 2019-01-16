@extends('cp.layout.app')

@section('content')


<div class="row">
    <div class="col-md-12 col-lg-12 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-body new-user">
                    <h5 class="header-title mb-4 mt-0">New Appoinments</h5>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Sr</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Phone no</th>
                                    <th class="border-top-0">Department</th>
                                    <th class="border-top-0">Doctor</th>
                                    <th class="border-top-0">Appoinment Date</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

@foreach ($appoinments as $key => $item)
<tr>
<td>{{ $key+1 }}</td>
<td>
    <a href="javascript:void(0);">{{ $item->name }}</a>
</td>
<td>{{ $item->email }}</td>
<td>{{ $item->phone }}</td>
<td>{{ $item->department_id }}</td>
<td>{{ $item->doctor_id }}</td>
<td>{{ $item->appoinment_date }}</td>
<td>
    <button type="button" onclick="makeUpdate({{ $item->id }})" class="btn btn-primary">
       Confirm
    </button> 
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



<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="msg"></div>
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div id="show"></div>
                <div class="form-group">
                    <label for="time">Appoinment time</label>
                    <input type="text" id="time" class="form-control" value="" placeholder="Enter time for the appoinment">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="confirm-btn" class="confirm btn btn-primary"  data-dismiss="modal">Confirm Appoinment</button>
            </div>
        </form> 

      </div>
    </div>
</div>

<script>

function makeUpdate(e)
{
    $('#update-modal').modal('show');

    // $('#time').val(e);

    $('#confirm-btn').click(function(){

        var id = e;
        var appoinment_time = $('#time').val();

        var token = $('meta[name="csrf-token"]').attr('content');
        var method = "PUT"; 

        if(appoinment_time != ""){ 

            $.ajax({
                url: "update-appoinment/"+id,
                type:"PUT",
                dataType:"json",
                data:{ 
                    id: id, 
                    confirm_status:1,
                    appoinment_time: appoinment_time,
                },
                success: function(respons){
                    $('#msg').fadeIn("2000");
                    $('#msg').html(respons);

                    id = "";
                    $('#update-modal').modal('hide');
                }
            });
  

            $('#time').val('');

        }else{
            $('#msg').fadeIn("2000");
            $('#msg').html(data);
        }

        return false;

    });
   
   return false;
}

        
</script>


@endsection