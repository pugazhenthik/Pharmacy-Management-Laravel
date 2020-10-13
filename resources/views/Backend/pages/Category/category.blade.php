@extends('Backend.layouts.app')
@section('title') Category @endsection
@section('head', 'Category')
@section('content')

<div class="col-md-10 header">
    <h3>Category</h3>
</div>
<div class="col-md-2"><button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Category</button></div>

<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Category Descryption</th>
                <th>Satus</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody>

            @foreach($category as $value)
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $value['name'] }} <br>
                </td>
                <td>{{ $value['description'] }}</td>
                <td>
                	@if ($value['status'] == 1)
                    <span class="text-info">Active</span>
	                @else
	                    <span class="text-danger">Inactive</span>
	                @endif
	            </td>
    
    
                <td class="text-center">
                    <ul class="table-controls">

                    	@if ($value['status'] == 1)
		                    <button class="btn btn-info rounded-circle status_id" style="height: 33px; width: 33px;" data-id="{{$value['id']}}"><i class="fa fa-refresh"></i></button>
		                @else
		                    <button class="btn btn-danger rounded-circle status_id" style="height: 33px; width: 33px" data-id="{{$value['id']}}"><i class="fa fa-refresh"></i></button>
		                @endif

                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$value['id']}}" title="Edit" data-target="#editModal"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a>
                        <a href="{{ route('category.destroy',($value['id'])) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $value['id'] }})";
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
                <th>Category Name</th>
                <th>Category Descryption</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </tfoot>
    </table>

    <table id="dataTable" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Sub Category Name</th>
                <th>Sub Category Descryption</th>
                <th>Satus</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody>

            @foreach($subcategory as $value)
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $value['category'] }} <br>
                </td>
                <td>{{ $value['name'] }} <br>
                </td>
                <td>{{ $value['description'] }}</td>
                <td>
                    @if ($value['status'] == 1)
                    <span class="text-info">Active</span>
                    @else
                        <span class="text-danger">Inactive</span>
                    @endif
                </td>
    
    
                <td class="text-center">
                    <ul class="table-controls">

                        @if ($value['status'] == 1)
                            <button class="btn btn-info rounded-circle status_id" style="height: 33px; width: 33px;" data-id="{{$value['id']}}"><i class="fa fa-refresh"></i></button>
                        @else
                            <button class="btn btn-danger rounded-circle status_id" style="height: 33px; width: 33px" data-id="{{$value['id']}}"><i class="fa fa-refresh"></i></button>
                        @endif

                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$value['id']}}" title="Edit" data-target="#editModal"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a>
                        <a href="{{ route('category.destroy',($value['id'])) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $value['id'] }})";
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
                <th>Sub Category Name</th>
                <th>Sub Category Descryption</th>
                <th>Status</th>
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
                <h5 class="modal-title">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.store') }}" method="post" id="addForm">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Category Name:</label>
                        <input type="text" name="category_name" class="form-control" placeholder="Category Name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Category Description:</label>
                        <input type="text" name="category_description" class="form-control" placeholder="Category Descryption">
                    </div>
                    <div>
                        <input type="checkbox" name="parent_category" id="parent_category" onchange="checkSubCategory('parent_category','parent_category_div','parent_category')" value="false">
                        <label for="parent_category">Use as Sub Category</label>
                    </div>
                    <div class="form-group mb-4 parent_category_div" hidden>
                        <label for="sub_category">Parent Category</label>
                        <select class="form-control" id="sub_category" name="parentId">
                            <option selected disabled hidden>Select Parent Cateogry</option>
                        </select>
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
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editForm">
                @csrf
                @method('put')
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Category Name:</label>
                        <input type="text" name="category_name" class="form-control" id="e_category_name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Category Descryption:</label>
                        <input type="text" name="category_description" class="form-control" id="e_category_description">
                    </div>

                     <div>
                        <input type="checkbox" name="parent_category" id="e_parent_category" onchange="checkSubCategory('e_parent_category','e_parent_category_div','e_parent_category')" value="false">
                        <label for="e_parent_category">Use as Sub Category</label>
                    </div>
                    <div class="form-group mb-4 e_parent_category_div" hidden>
                        <label for="sub_category">Parent Category</label>
                        <select class="form-control" id="e_sub_category" name="parentId">
                        </select>
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
                url:"/admin/category/"+id+"/edit",
                type:'get',
                data:{"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data)
                {
                    $("#e_category_name").val(data.category_name);
                    $("#e_category_description").val(data.category_description);
                    $("#editForm").attr("action","/admin/category/"+data.category_id);
                    if(data.parentId){
                        getCategory('e_sub_category','e_parent_category');
                        $(".e_parent_category_div").removeAttr("hidden","hidden");
                        $("#e_parent_category").attr("checked","checked");
                        $("#e_sub_category").val(data.parentId);
                    }
                }

            });
        });


        $('.status_id').click(function(){
			var id=$(this).attr("data-id");

			$.ajax({
            url: "/admin/category/show/"+id,
            type: "get",
            dataType: "json",
            success: function (response) {
            	console.log(response);
                if (response == 200) 
                {
                    iziToast.show({
				    title: 'Category',
				    timeout: 20000,
				    timeout: 20000,
			        close: true,
			        overlay: true,
			        displayMode: 'once',
				    message: 'status Changed successfully'
					});
					location.reload();
                }
            }
        })
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

                $form.attr('action','/admin/category/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}

    function checkSubCategory(parentId,parentDiv,parentClass) {
        if ($(`#${parentId}`).is(':checked')) 
        {
            if(parentId=='e_parent_category'){
                getCategory('e_sub_category','e_parent_category');                
            }else{
                getCategory('sub_category','parent_category');
            }
            $(`.${parentDiv}`).removeAttr("hidden","hidden");
        }
        else{
            $(`.${parentClass}`).remove();
            $(`.${parentDiv}`).attr("hidden","hidden");
        }
    }


    function getCategory(optionId,optionClass){
        $.ajax({
            url:"allCategory/",
            type:"get",
            dataType:"json",
            success:function(data){
                $(`.${optionClass}`).remove();
                $.each(data,function(i,v){
                    $(`#${optionId}`).append(`
                        <option class="${optionClass}" value="${v.category_id}">${v.category_name}</option>
                        `);
                })
            }
        });
    }

</script>

<!-- {!! JsValidator::formRequest('App\Http\Requests\CategoryRequest', '#addForm'); !!} -->
<!-- {!! JsValidator::formRequest('App\Http\Requests\CategoryRequest', '#editForm'); !!} -->

@endsection


