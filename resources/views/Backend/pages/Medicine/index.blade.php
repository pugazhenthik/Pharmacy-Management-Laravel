@extends('Backend.layouts.app')
@section('title') Medicine @endsection
@section('head', 'Medicine')
@section('content')

<div class="col-md-10 header">
    <h3> Medicine</h3> 
</div>
<div class="col-md-2"><a href="{{ url('/admin/medicine/create') }}"><button class="btn btn-primary float-right">Add Medicine</button></a> </div>

<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead class="text-center">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gemeric Name</th>
                <th>image</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Sub-Category</th>
                <th>Type</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody class="text-center">
            @foreach($medicines as $medicine)
    
           
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $medicine-> med_name }}</td>
                <td>{{ $medicine->generic->generic_name }}</td>
                @if($medicine-> med_image== null)
                <td><img alt="image" id="previmage" width="70" height="70" src='/blankmedicine.jpeg' class="rounded-circle mb-3 emp_img"></td>
                @else
                
                <td><img width="70" height="70" src="{{asset ('Backend_assets/Medicine/'. $medicine->med_name) }}"> </td>

                @endif
                
                <td>{{ $medicine-> med_sku}}</td>
                <td>{{ $medicine->category->category_name }}</td>
                <td>{{ $medicine-> med_sub_cat_id }}</td>
                <td>{{ $medicine->type->type_name }}</td>
                <td>
                    @if($medicine-> med_status == 1)
                    <span class="text-success">Active</span>
                    @else
                    <span class="text-danger">Inactive</span>
                    @endif
                </td>

    
    
                <td class="text-left">
                    <ul class="table-controls">
                        <a href="" class="view" data-toggle="modal" data-placement="top" data-id="{{$medicine->med_id}}" title="View" data-target="#view"><i class="text-info" data-feather="eye"></i></a>

                        @if($medicine->med_status == 1)
                        <a class="status_id active_btn" data-id="{{$medicine->med_id}}"><i data-feather="refresh-ccw"></i></a>
                        @else
                        <a class="status_id inactive_btn" data-id="{{$medicine->med_id}}"><i data-feather="refresh-ccw"></i></a>
                        @endif
                        <a href="{{ route('medicine.edit',($medicine->med_id)) }}" class="edit" title="Edit" data-target="#editModal"><i class="text-info" data-feather="edit"></i></a>


                        <a href="{{ route('medicine.destroy',($medicine->med_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $medicine->med_id }});"
                                data-original-title="Delete"><i class="text-danger" data-feather="trash-2"></i></a>
                    </ul>
                </td>
            </tr>
            @endforeach
    
        </tbody>
    </table>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $("#dataTable").DataTable();
       
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

                $form.attr('action','/admin/medicine/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}
</script>
@endsection