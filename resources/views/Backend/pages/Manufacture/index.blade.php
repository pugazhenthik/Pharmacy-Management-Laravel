@extends('Backend.layouts.app')
@section('title') Manufacture @endsection
@section('head', 'Manufacture')
@section('content')

<div class="col-md-10 header">
    <h3>Manufacture</h3> 
</div>
<div class="col-md-2"><button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add
        Manufacture</button></div>

<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Balance</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody>
            @foreach($manufactures as $manufacture)
    
           
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $manufacture-> manufac_name }}</td>
                <td>{{ $manufacture-> manufac_mobile }}</td>
                <td>{{ $manufacture-> manufac_address}}</td>
                <td>{{ $manufacture-> manufac_balance }}</td>
    
    
                <td class="text-center">
                    <ul class="table-controls">
                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$manufacture->manufac_id}}" title="Edit" data-target="#editModal"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a>
                        <a href="{{ route('manufacture.destroy',($manufacture->manufac_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $manufacture->manufac_id }});"
                                data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-trash-2 text-danger">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg></a>
                    </ul>
                </td>
            </tr>
            @endforeach
    
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Balance</th>
                <th class="text-center">Action</th>
            </tr>
        </tfoot>
    </table>
</div>




<!-- Add Modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Manufacture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('manufacture.store') }}" method="post" id="addForm">
                @csrf
                <div class="modal-body">

                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" name="manufac_name" id="name"
                                placeholder="Type Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="manufac_email" id="email"
                                placeholder="Type Email">
                        </div>
                    </div>

                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label>Balance:</label>
                        <input type="number" class="form-control" name="manufac_balance" id="balence">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" name="manufac_mobile" id="mobile"
                                placeholder="Type Mobile">
                        </div>
                    </div>

            
                    <div class="form-group">
                        <label> Address:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="manufac_address" cols="10"
                            rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label> Details:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="manufac_details" cols="10"
                            rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Edit Modal -->

<div class="modal fade "  role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Manufacture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editForm">
                @csrf
                @method('put')
                <div class="modal-body">

                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" name="manufac_name" id="e_name"
                                placeholder="Type Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="manufac_email" id="e_email"
                                placeholder="Type Email">
                        </div>
                    </div>

                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label>Balance:</label>
                        <input type="number" class="form-control" name="manufac_balance" id="e_balence">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" name="manufac_mobile" id="e_mobile"
                                placeholder="Type Mobile">
                        </div>
                    </div>

            
                    <div class="form-group">
                        <label> Address:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="manufac_address" cols="10"
                            rows="10" id="e_manufac_address"></textarea>
                    </div>
                    <div class="form-group">
                        <label> Details:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="manufac_details" cols="10"
                            rows="10" id="e_manufac_details"></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
</div>



@endsection
@section('script')
<script>
    $(document).ready(function(){
        $("#dataTable").DataTable();
        $(".edit").click(function(){
            let id=$(this).attr("data-id");

            $.ajax({
                url:"/admin/manufacture/"+id+"/edit",
                type:'get',
                data:{"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data)
                {
                    console.log(data);
                    $("#e_name").val(data.manufac_name);
                    $("#e_email").val(data.manufac_email);
                    $("#e_balence").val(data.manufac_balance);
                    $("#e_mobile").val(data.manufac_mobile);
                    $("#e_manufac_address").val(data.manufac_address);
                    $("#e_manufac_details").val(data.manufac_details);

                    $("#editForm").attr("action","/admin/manufacture/"+data.manufac_id);

                }

            });
        });
    });
    function Delete(id){
    var id=id;
    iziToast.question({
        timeout: 20000,
        close: true,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: 'Wait!',
        message: 'Are you sure? Once Deleted Can\'t be undone!',
        position: 'center',
        buttons: [
            ['<button><b>YES</b></button>', function () {
                var $form = $("#deleteForm").closest('form');

                $form.attr('action','/admin/manufacture/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}
</script>
{!! JsValidator::formRequest('App\Http\Requests\ManufactureRequest', '#addForm'); !!}
{!! JsValidator::formRequest('App\Http\Requests\ManufactureRequest', '#editForm'); !!}
@endsection


