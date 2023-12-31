@extends('reception.reception_master')
@section('content')






<div class="row">
    <br>
    <div class="col-md-12 ">

        <div class="card">

            <div class="card-header with-border">
                <h3 class="card-title ">Search Result</h3>
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

                                @forelse ($search as $i)
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
                               <b><center><h4 class="text-danger">No result found. try search with booking number or customer name</h4></center></b>
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
<div class="row">
    <div class="col-md-12" id="searchproject">
        <div ></div>
    </div>
</div>
<hr>


























@endsection
