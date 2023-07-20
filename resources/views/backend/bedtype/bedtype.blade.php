@extends('admin.admin_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>All Bed Types</h1>
    </div>

    <div class="button">
        <a href="{{ route('add_bedtype') }}" class="btn btn-warning"><span style="font-weight: bolder;">+ </span> Add New</a>
    </div>
</div>

<br>

<section>
    <div class="row">

        <div class="col-md-12 ">
            <div class="card">

                <div class="card-header with-border">
                    <h3 class="card-title ">Bed Types</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S|N</th>
                                    <th>Bed Type</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($datas as $key => $data)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$data->bedtype}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('edit_bedtype', $data->id)}}" class="btn btn-success btn-sm"></i>Edit</a>
                                        <span class="m-1 d-block"></span>
                                        
                                        <a href="{{route('delete_bedtype', $data->id)}}" onclick="confirmation(event)" class="btn btn-danger btn-sm" id="delete"></i>Delete</a>
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
</section>













@endsection