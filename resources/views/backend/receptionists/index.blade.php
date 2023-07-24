@extends('admin.admin_master')
@section('content')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="app-user-list">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="fw-bolder mb-75">{{ count($recept) }}</h3>
                                    <span>Total Receptionists</span>
                                </div>
                                <div class="avatar bg-light-primary p-50">
                                    <span class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user font-medium-4">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="fw-bolder mb-75">{{ count($recept) }}</h3>
                                    <span>Total Admins</span>
                                </div>
                                <div class="avatar bg-light-primary p-50">
                                    <span class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user font-medium-4">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>






                    <!-- list and filter end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>



    <div class="row">

        <div class="col-md-12 ">

            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title ">Manage Receptionists</h3>
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">Add new Receptionist</a>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>

                                <tr>

                                    <th>Name</th>
                                    <th>Phone </th>
                                    <th>Email</th>
                                    <th>Added Date</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($recept as $i)
                                    <tr>

                                        <td>{{ $i->name }}</td>
                                        <td>{{ $i->phone }}</td>
                                        <td>{{ $i->email }}</td>


                                        <td>{{ Carbon\Carbon::parse($i->created_at)->format('D, d F Y') }}</td>
                                        <td>
                                            <a href="{{ route('delete-recept', $i->id) }}" class="btn btn-danger" id="delete"><i class="fa fa-trash">
                                                </i> delete</a>
                                            <a data-bs-toggle="modal" data-bs-target="#edit{{ $i->id }}" class="btn btn-info"><i class="fa fa-eye"> </i> Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->

            </div>

            <!-- /.box -->
        </div>








        <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                            <h1 class="mb-1">Add new Receptionist / Admin</h1>
                            <p>You can add new Receptionist or new admin here</p>
                        </div>
                        <form method="POST" action="{{ route('admin-add-recept') }}" id="editUserForm" class="row gy-1 pt-75" >
                            @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" >Full Name</label>
                                <input type="text"  name="name"
                                    class="form-control" placeholder="name"
                                    data-msg="Please enter your first name" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text"  name="phone"
                                    class="form-control" placeholder="phone number"
                                    data-msg="Please enter your last name" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserName">Email Address</label>
                                <input type="email"  name="email" class="form-control"
                                     placeholder="e@example.com" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserName">Password</label>
                                <input type="password"  name="password" class="form-control"
                                     placeholder="login password"  autocomplete="OFF"/>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-center mt-1">
                                    <div class="form-check form-switch form-check-primary">
                                        <input type="checkbox" class="form-check-input" id="customSwitch10" value="1" name="type"/>
                                        <label class="form-check-label" for="customSwitch10">
                                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                                        </label>
                                    </div>
                                    <label class="form-check-label fw-bolder" for="customSwitch10">Make this person Admin?</label>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-2 pt-50">
                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Discard
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit User Modal -->








<!---edit recept--->

@foreach ($recept as $i)



<div class="modal fade" id="edit{{ $i->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Update Receptionist</h1>
                    <p>Update Receptionist information</p>
                </div>
                <form method="POST" action="{{ route('admin-update-recept', $i->id) }}" id="editUserForm" class="row gy-1 pt-75" >
                    @csrf
                    <div class="col-12 col-md-6">
                        <label class="form-label" >Full Name</label>
                        <input type="text"  name="name" value="{{ $i->name }}"
                            class="form-control" placeholder="name"
                            data-msg="Please enter your first name" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="text"  name="phone"  value="{{ $i->phone }}"
                            class="form-control" placeholder="phone number"
                            data-msg="Please enter your last name" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserName">Email Address</label>
                        <input type="email"  name="email" value="{{ $i->email }}" class="form-control"
                             placeholder="e@example.com" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserName">Password (Leave blank if you don't wish to update it)</label>
                        <input type="password"   name="password" class="form-control"
                             placeholder="login password"  autocomplete="OFF"/>
                    </div>

                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-info me-1">Update</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">
                            Discard
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!--/ Edit User Modal -->


















    @endsection
