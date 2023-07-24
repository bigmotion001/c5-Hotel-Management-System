@extends('admin.admin_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>All Facilities</h1>
    </div>

    <div class="button">
        <a href="{{ route('add_facilities') }}" class="btn btn-warning"><span style="font-weight: bolder;">+ </span> Add New</a>
    </div>
</div>

<br>

<section>
    <div class="row">

        <div class="col-md-12 ">
            <div class="card">

                <div class="card-header with-border">
                    <h3 class="card-title ">Facilities</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S|N</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($datas as $key => $data)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->sub_title}}</td>


                                    <td class="d-flex mt-3">
                                        <a href="{{route('edit_facilities', $data->id)}}" class="btn btn-success btn-sm"></i>Edit</a>
                                        <span class="m-1 d-block"></span>

                                        <a href="{{route('delete_facilities', $data->id)}}" onclick="confirmation(event)" class="btn btn-danger btn-sm" id="delete"></i>Delete</a>
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