@extends('admin.admin_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>Room Type</h1>
    </div>

    <div class="button">
        <a href="{{ route('add_roomtype') }}" class="btn btn-warning"><span style="font-weight: bolder;">+ </span> Add New</a>
    </div>
</div>

<br>

<section>
    <div class="row">

        <div class="col-md-12 ">
            <div class="card">

                <div class="card-header with-border">
                    <h3 class="card-title ">Room Types</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S|N</th>
                                    <th>Name</th>
                                    <th>Fare</th>
                                    <th>Rooms</th>
                                    <th>Adult</th>
                                    <th>Child</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($datas as $key => $data)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->fare}}</td>
                                    <td>{{$data->total_rooms}}</td>
                                    <td>{{$data->adult}}</td>
                                    <td>{{$data->child}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('edit_roomtype', $data->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Edit</a>
                                        <span class="m-1 d-block"></span>

                                        <a href="{{route('delete_roomtype', $data->id)}}" onclick="confirmation(event)" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-eye"></i>Delete</a>
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