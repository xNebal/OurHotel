@extends('layouts.emp')

@section('title')
ALL RESERVATION
@endsection

@section('css')
@endsection

@section('Dashboard')
@endsection

@section('content')

<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of Rseservation</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Reservation ID</th>
                        <th scope="col">Room ID</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Reservation State</th>
                        <th scope="col">Reservationist</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ress as $res)
                    <tr>
                        <th scope="row">{{$res->res_id}}</th>
                        <td>{{$res->room_id}}</td>
                        <td>{{$res->from}}</td>
                        <td>{{$res->to}}</td>
                        <td>{{$res->state}}</td>
                        <td>{{ $res->reservationist }}</td>
                        <td>
                            <a href="{{ route('/reservation_emp/reservation/showres', $res->res_id) }}"><button class="btn btn-primary btn-sm">View</button></a>
                            <a href="{{ route('/reservation_emp/reservation/edit', $res->res_id) }}"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                            <a href="{{ route('/reservation_emp/reservation/delete', $res->res_id) }}"><button class="btn btn-primary btn-sm">Delete</button></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endsection

        @section('script')

        @endsection