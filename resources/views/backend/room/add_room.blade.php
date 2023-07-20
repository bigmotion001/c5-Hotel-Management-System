@extends('admin.admin_master')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <div class="header">
        <h1>Add Room</h1>
    </div>

    <div class="button">
        <a href="{{ route('room') }}" class="btn btn-warning"><span style="font-weight: bolder;">&lt; </span>  Go Back</a>
    </div>
</div>

<br>

<section>
    <div class="row">
        <br>
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title ">Add Room</h3>
                </div>
                <div class="card-body">
                    <form class="form" action="{{route('save_room')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Add Room Number" name="room_number" value="{{ old('room_number') }}" />
                                    @error('room_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Add Room Type" name="room_type" value="{{ old('room_type') }}" />
                                    @error('room_type')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <label class="form-label">Choose Room Status</label>
                                        <select name="room_status" class="form-control" id="">
                                            <option></option>
                                            <option value="Enable">Enable</option>
                                            <option value="Disable">Disable</option>
                                        </select>
                                        @error('room_status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-1">Add Room</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>













@endsection