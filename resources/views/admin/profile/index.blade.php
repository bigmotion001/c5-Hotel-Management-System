@extends('admin.admin_master')
@section('content')




<div class="card">
    <div class="card-header">
        <h2>Update profile</h2>
        <h2 class="text-right">Update password</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('admin_update_profile') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $admin->name }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $admin->email }}">
                    </div>
                    <input type="submit" value="Update Profile" class="btn btn-primary">
                </form>

            </div>

            <div class="col-md-6">

                <form action="{{ route('admin_update_password') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Current password</label>
                        <input type="password" name="current_password" class="form-control" placeholder="current password">
                        @error('current_password')
                        <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">New Password</label>
                        <input type="password" name="password" class="form-control" placeholder="new password">
                        @error('password')
                        <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Confirm password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="retype password">
                        @error('password_confirmation')
                        <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <input type="submit" value="Update Password" class="btn btn-danger">
                </form>

            </div>


        </div>
    </div>
</div>












@endsection
