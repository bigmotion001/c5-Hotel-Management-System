@extends('admin.admin_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>Update Amenity</h1>
    </div>

    <div class="button">
        <a href="{{ route('amenities') }}" class="btn btn-warning"><span style="font-weight: bolder;">&lt; </span> Go Back</a>
    </div>
</div>

<br>

<section>
    <div class="row">
        <br>
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title ">Update Amenity</h3>
                </div>
                <div class="card-body">
                    <form class="form" action="{{route('updated_amenity', $datas->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <input type="text" id="" class="form-control" placeholder="Update Title" name="title" value="{{ $datas->title }}" />
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <input type="text" id="" placeholder="Icon Name" class="form-control" name="icon" />
                                    @error('icon')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-1">Update Amenity</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>













@endsection
