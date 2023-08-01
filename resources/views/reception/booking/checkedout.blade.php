@extends('reception.reception_master')
@section('content')


@php
     $todayreservation = App\Models\Booking::where('status', 3)->orderBy('created_at', 'DESC')->get();
@endphp



<div class="row">
    <br>
    <div class="col-md-12 ">

        <div class="card">

            <div class="card-header with-border">
                <h3 class="card-title ">Completed Reservation Request</h3>
            </div>

            <!-- /.box-header -->
            <div class="card-body">

                <div class="table-responsive ">

                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Guest</th>
                                <th>Room</th>
                                <th>Total Room</th>
                                <th>Checkin date</th>
                                <th>Checkout date</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                                <th>Booking Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                                @forelse ($todayreservation as $i)
                                <tr>
                                <td>{{ $i->user }}</td>
                                <td>{{ $i->room->name }}</td>
                                <td>{{ $i->total_room }}</td>
                                <td><span class="badge bg-success" >{{ $i->checking }}</span></td>
                                <td><span class="badge bg-secondary" >{{ $i->checkout }}</span></td>
                                <td>₦{{ Number_format($i->amount, 2) }}</td>
                                <td>
                                    @if ($i->paid == 0)
                                    <span class="badge bg-danger" >Pending</span>
                                    @elseif ($i->piad == 1)
                                    <span class="badge bg-success" >Paid</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($i->status == 0)
                                    <span class="badge bg-danger" >Pending</span>
                                    @elseif ($i->status == 1)
                                    <span class="badge bg-success" >Confirmed</span>
                                    @elseif ($i->status == 2)
                                    <span class="badge bg-warning" >Cancelled</span>
                                    @elseif ($i->status == 3)
                                    <span class="badge bg-info" >Checkedout</span>
                                    @endif
                                </td>
                                <td><a href="{{ route('view-booking', $i->id) }}" class="btn btn-primary">View</a></td>

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
