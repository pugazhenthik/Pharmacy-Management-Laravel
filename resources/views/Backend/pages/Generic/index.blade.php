@extends('Backend.layouts.app')
@section('title') Generic @endsection
@section('content')

<div class="col-md-10 header">
    <h3>Generic</h3>
</div>
<div class="col-md-2"><button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add
        Generic</button></div>

<div class="col-md mt-5 ">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Detalis</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($generics as $generic)
    
           
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $generic-> generic_name}}</td>
                <td>{{ $generic-> generic_generic_details }}</td>
    
    
                <td class="text-center">
                    <ul class="table-controls">
                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$generic->manufac_id}}" title="Edit" data-target="#editModal"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a>
                        <a href="{{ route('generic.destroy',($generic->manufac_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $generic->manufac_id }});"
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
                <th>Detalis</th>
               
                <th class="text-center">Action</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection