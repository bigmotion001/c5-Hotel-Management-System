@extends('backend.backend_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>Add To Gallery</h1>
    </div>

    <div class="button">
        <a href="{{ route('create_gallery') }}" class="btn btn-warning"><span style="font-weight: bolder;">&lt; </span>  Go Back</a>
    </div>
</div>

<br>

<section>
    <div class="row">
        <br>
        <div class="col-md-12 ">
            <div class="card">
                
                <div class="card-body">
                    <form class="form" action="{{route('save_gallery')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Add Title" name="title" value="{{ old('title') }}" />
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <label class="form-label">Choose Image</label>
                                    <input type="file" id="" class="form-control" name="image" />
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-1">Add Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>













@endsection