@extends('Backend.layouts.app')
@section('title') Type @endsection
@section('head', 'Type')
@section('content')

<div class="col-md-10 header">
    <h3>Type</h3>
</div>
<div class="col-md-2"><button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Type</button></div>

<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>#</th>
                <th>Type Name</th>
                <th>Type Descryption</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody>
            @foreach($type as $value)
    
           
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $value-> type_name }}</td>
                <td>{{ $value-> type_description }}</td>
    
                <td class="text-center">
                    <ul class="table-controls">

                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$value->type_id}}" title="Edit" data-target="#editModal"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a>
                        <a href="{{ route('type.destroy',($value->type_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $value->type_id }})";
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
                <th>Type Name</th>
                <th>Type Descryption</th>
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
                <h5 class="modal-title">Add Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('type.store') }}" method="post" id="addForm">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Type Name:</label>
                        <input type="text" name="type_name" class="form-control" placeholder="Type Name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Type Descryption:</label>
                        <input type="text" name="type_description" class="form-control" placeholder="Type Descryption">
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
                <h5 class="modal-title">Edit Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editForm">
                @csrf
                @method('put')
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Type Name:</label>
                        <input type="text" name="type_name" class="form-control" id="e_type_name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Type Descryption:</label>
                        <input type="text" name="type_description" class="form-control" id="e_type_description">
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
                url:"/admin/type/"+id+"/edit",
                type:'get',
                data:{"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data)
                {
                    console.log(data);
                    $("#e_type_name").val(data.type_name);
                    $("#e_type_description").val(data.type_description);

                    $("#editForm").attr("action","/admin/type/"+data.type_id);

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

                $form.attr('action','/admin/type/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}

</script>

{!! JsValidator::formRequest('App\Http\Requests\TypeRequest', '#addForm'); !!}
{!! JsValidator::formRequest('App\Http\Requests\TypeRequest', '#editForm'); !!}

@endsection


