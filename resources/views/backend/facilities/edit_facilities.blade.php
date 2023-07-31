@extends('admin.admin_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>Update Facilities</h1>
    </div>

    <div class="button">
        <a href="{{ route('facilities') }}" class="btn btn-warning"><span style="font-weight: bolder;">&lt; </span> Go Back</a>
    </div>
</div>

<br>

<section>
    <div class="row">
        <br>
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title ">Update Facilities</h3>
                </div>
                <div class="card-body">
                    <form class="form" action="{{route('updated_facilities', $datas->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Title" name="title" value="{{ $datas->title }}" />
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12">
                                    <label class="form-label">Update Sub Title</label>
                                    <textarea name="sub_title" class="form-control" id="" cols="30" rows="3">{{ $datas->sub_title }}</textarea>
                                    @error('sub_title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label"><img style="width: 100px; height:100px; object-fit:cover;" src="../uploads/images/{{$datas->image1}}" alt="{{$datas->name}} 1"></label>
                                    <input type="file" id="" class="form-control" name="image1" value="{{ old('image1') }}" />
                                    @error('image1')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label"><img style="width: 100px; height:100px; object-fit:cover;" src="../uploads/images/{{$datas->image2}}" alt="{{$datas->name}} 2"></label>
                                    <input type="file" id="" class="form-control" name="image2" value="{{ old('image2') }}" />
                                    @error('image2')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label"><img style="width: 100px; height:100px; object-fit:cover;" src="../uploads/images/{{$datas->image3}}" alt="{{$datas->name}} 3"></label>
                                    <input type="file" id="" class="form-control" name="image3" value="{{ old('image3') }}" />
                                    @error('image3')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label"><img style="width: 100px; height:100px; object-fit:cover;" src="../uploads/images/{{$datas->image4}}" alt="{{$datas->name}} 4"></label>
                                    <input type="file" id="" class="form-control" name="image4" value="{{ old('image4') }}" />
                                    @error('image4')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-1">Update Facilities</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<script>
    $('#amenities').select2({
        multiple: true
    })

    $('#complements').select2({
        multiple: true
    })
</script>








@endsection