@extends('backend.backend_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>Update Room Type</h1>
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
                    <h3 class="card-title ">Update Room Type</h3>
                </div>
                <div class="card-body">
                    <form class="form" action="{{route('updated_roomtype', $datas->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Name" name="name" value="{{ $datas->name }}" />
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Total Adult" name="adult" value="{{ $datas->adult }}" />
                                    @error('adult')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Total Child" name="child" value="{{ $datas->child }}" />
                                    @error('child')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="number" min="0" id="" class="form-control" placeholder="Fare/Night" name="fare" value="{{ $datas->fare }}" />
                                    @error('fare')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row col-md-12 col-12">


                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="number" min="0" id="" class="form-control" placeholder="Cancellation Fee/Night" name="cancellation_fee" value="{{ $datas->cancellation_fee }}" />
                                    @error('cancellation_fee')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-12 col-12 row">

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label">Choose Amenities</label>
                                    <select name="amenities" class="form-control" id="">
                                        <option value="{{ $datas->amenities }}">{{ $datas->amenities }}</option>
                                        @foreach($amenities as $amenity)
                                        <option value="{{$amenity->id}}">{{$amenity->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('amenities')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <label class="form-label">Choose Complements</label>
                                    <select name="complements" class="form-control" id="">
                                        <option value="{{ $datas->complements }}">{{ $datas->complements }}</option>
                                        @foreach($complements as $complement)
                                        <option value="{{$complement->id}}">{{$complement->title}}</option>
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
                                    <input type="number" id="" min="0" class="form-control" placeholder="Total Rooms" name="total_rooms" value="{{ $datas->total_rooms }}" />
                                    @error('total_rooms')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="number" id="" min="0" class="form-control" placeholder="Total Bed" name="total_beds" value="{{ $datas->total_beds }}" />
                                    @error('total_beds')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row col-md-12 col-12">

                                <div class="mb-2 col-sm-12 col-md-6">

                                    <label class="form-label">Room Description</label>
                                    <textarea name="description" class="form-control" id="" cols="20" rows="5">{{ $datas->description }}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="mb-2 col-sm-12 col-md-6">

                                    <label class="form-label">Cancellation Policy</label>
                                    <textarea name="cancellation_policy" class="form-control" id="" cols="20" rows="5">{{ $datas->cancellation_policy }}</textarea>
                                    @error('cancellation_policy')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                            </div>

                            <div class="row col-md-12 col-12">

                                <div class="mb-2">
                                    <label class="form-label">Active Image: {{ $datas->image }}</label>
                                    <input type="file" id="" class="form-control" name="image" value="{{ old('image') }}" />
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-1">Update Room Type</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>













@endsection