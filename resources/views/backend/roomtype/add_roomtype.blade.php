@extends('admin.admin_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>Add Room Type</h1>
    </div>

    <div class="button">
        <a href="{{ route('roomtype') }}" class="btn btn-warning"><span style="font-weight: bolder;">&lt; </span> Go Back</a>
    </div>
</div>

<br>

<section>
    <div class="row">
        <br>
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title ">Add Room Type</h3>
                </div>
                <div class="card-body">
                    <form class="form" action="{{route('save_roomtype')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" />
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Total Adult" name="adult" value="{{ old('adult') }}" />
                                    @error('adult')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Total Child" name="child" value="{{ old('child') }}" />
                                    @error('child')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="number" min="0" id="" class="form-control" placeholder="Fare/Night" name="fare" value="{{ old('fare') }}" />
                                    @error('fare')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row col-md-12 col-12">


                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="number" min="0" id="" class="form-control" placeholder="Cancellation Fee/Night" name="cancellation_fee" value="{{ old('cancellation_fee') }}" />
                                    @error('cancellation_fee')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-12 col-12 row">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label">Choose Amenities</label>

                                    <select required name="amenities[]" class="form-control" id="amenities">

                                        <select name="amenities" class="select2-size-lg form-select" multiple="multiple" id="large-select-multi">
                                            @foreach($amenities as $amenity)
                                            <option value="{{$amenity->title}}">{{$amenity->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('amenities')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label">Choose Complements</label>
                                    <select required name="complements[]" class="form-control" id="complements">

                                        <select name="complements" class="select2-size-lg form-select" multiple="multiple" id="large-select-multi">
                                            @foreach($complements as $complement)
                                            <option value="{{$complement->title}}">{{$complement->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('complements')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>

                            </div>

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="number" id="" min="0" class="form-control" placeholder="Total Rooms" name="total_rooms" value="{{ old('total_rooms') }}" />
                                    @error('total_rooms')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="number" id="" min="0" class="form-control" placeholder="Total Bed" name="total_beds" value="{{ old('total_beds') }}" />
                                    @error('total_beds')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">

                                    <label class="form-label">Room Description</label>
                                    <textarea name="description" class="form-control" id="" cols="20" rows="5">{{ old('description') }}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">

                                    <label class="form-label">Cancellation Policy</label>
                                    <textarea name="cancellation_policy" class="form-control" id="" cols="20" rows="5">{{ old('cancellation_policy') }}</textarea>
                                    @error('cancellation_policy')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                            </div>

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label">Image 1</label>
                                    <input type="file" id="" class="form-control" name="image1" value="{{ old('image1') }}" />
                                    @error('image1')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label">Image 2</label>
                                    <input type="file" id="" class="form-control" name="image2" value="{{ old('image2') }}" />
                                    @error('image2')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label">Image 3</label>
                                    <input type="file" id="" class="form-control" name="image3" value="{{ old('image3') }}" />
                                    @error('image3')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label">Image 4</label>
                                    <input type="file" id="" class="form-control" name="image4" value="{{ old('image4') }}" />
                                    @error('image4')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-1">Add Room Type</button>
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