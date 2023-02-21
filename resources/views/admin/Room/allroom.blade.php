@extends('layouts.master')

@section('title')
ALL ROOM
@endsection

@section('css')

@endsection

@section('Dashboard')
All ROOM
@endsection

@section('content')

<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <div class="mt-5">
                <h4 class="card-title float-left mt-2">ROOMS</h4>
                <a href="./addroom" class="btn btn-primary float-right veiwbutton ">Add Room</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body booking_card">
                <div class="table-responsive">
                    <table class="datatable table table-stripped table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>Room ID</th>
                                <th>Room Type</th>
                                <th>Bed Number</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>description</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room )
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td>{{ $room->type }}</td>
                                <td>{{ $room->bed_number }}</td>

                                <td>
                                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">{{ $room->state }}</a> </div>
                                </td>
                                <td>{{ $room->price }}</td>
                                <td>{{ $room->description }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('/admin/Room/editroom', $room->id) }}/"><i class="fas fa-pencil-alt m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ route('room.destroy', $room->id) }}" ><i class="fas fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--<div id="delete_asset" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center"> <img src="{{ URL::to('assets/img/sent.png') }}" alt="" width="50"
                    height="46">
                <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>-->
</div>
</div>

@endsection

@section('script')

@endsection