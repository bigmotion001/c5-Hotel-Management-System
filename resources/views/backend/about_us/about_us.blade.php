@extends('admin.admin_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>About Us</h1>
    </div>

    <div class="button">
    </div>
</div>

<br>

<section>
    <div class="row">

        <div class="col-md-12 ">
            <div class="card">

                <div class="card-header with-border">
                    <h3 class="card-title ">About</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S|N</th>
                                    <th>Main Image</th>
                                    <th>Sub Image</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($datas as $key => $data)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td><img style="width: 100px; height:100px; object-fit:cover;" src="../../uploads/images/{{$data->image1}}" alt="{{$data->image1}}"></td>

                                    <td><img style="width: 100px; height:100px; object-fit:cover;" src="../../uploads/images/{{$data->image2}}" alt="{{$data->image1}}"></td>

                                    <td>{{$data->title}}</td>
                                    <td>{!! Str::limit($data->sub_title, 75, '...') !!}</td>


                                    <td class="d-flex mt-3">
                                        <a href="{{route('edit_about_us', $data->id)}}" class="btn btn-success btn-sm"></i>Edit</a>
                                        <span class="m-1 d-block"></span>
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