@extends('layouts.emp')

@section('title')
Show Reservation
@endsection

@section('css')
@endsection

@section('content')

<body class="d-flex flex-column h-100">

    <main role="main" class="flex-shrink-0">
        <div class="container">

            <h1>Reservation Info</h1>
            <h4>Reservation:</h4>
            <p>{{ $res->res_id }}</p>
            <h4>Room id</h4>
            <p>{{$res->room_id}}</p>
            <h4>Reservation from:</h4>
            <p>{{ $res->from }}</p>
            <h4>Reservation to:</h4>
            <p>{{ $res->to }}</p>
            <h4>Reservation State:</h4>
            <p>{{ $res->state }}</p>
            @guest
            @if( 'Bill::findOrFail($res_id)' == true )
            <form action="{{ route('/reservation_emp/bills/bill', $res->res_id ) }}" method="get">
                <button type="submit" class="btn btn-primary">show bill</button>
            </form>
            @endif
            @else
            <form action="{{ route('/reservation_emp/bills/addbill', $res->res_id ) }}" method="get">
                <button type="submit" class="btn btn-primary">show bill</button>
            </form>

            @endguest

        </div>
        @endsection

        @section('script')

        @endsection