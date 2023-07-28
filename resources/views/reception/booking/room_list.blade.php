@extends('reception.reception_master')
@section('content')


@php
     $rooms = App\Models\Roomtype::latest()->get();
@endphp



<div class="row">
    <br>
    <div class="col-md-12 ">

        <div class="card">

            <div class="card-header with-border">
                <h3 class="card-title ">List Of Rooms</h3>
            </div>

            <!-- /.box-header -->
            <div class="card-body">

                <div class="table-responsive ">

                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>Price</th>
                                <th>Total Rooms</th>
                                <th>Available Rooms</th>
                                <th>Total Booked</th>
                                <th>Total Adult</th>
                                <th>Total Children</th>

                            </tr>
                        </thead>

                        <tbody>

                                @forelse ($rooms as $i)
                                <tr>

                                <td>{{ $i->name }}</td>
                                <td>{{ $i->fare }}</td>
                                <td>{{ $i->total_rooms }}</td>
                                <td>{{ $i->available_rooms }}</td>
                                <td>{{ $i->total_booked }}</td>
                                <td>{{ $i->adult }}</td>
                                <td>{{ $i->child }}</td>

                            @empty
                                <h3>No booking yet</h3>
                            </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>
            </div>
            <!-- /.box-body -->

        </div>

        <!-- /.box -->
    </div>

</div>
<hr>


























@endsection
