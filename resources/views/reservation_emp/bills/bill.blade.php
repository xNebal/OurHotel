@extends('layouts.emp')

@section('title')
Show Bill
@endsection

@section('css')
@endsection

@section('content')

<body class="d-flex flex-column h-100">

    <main role="main" class="flex-shrink-0">
        <div class="container">

            <h1>Bill Info</h1>
            <h4>Bill:</h4>
            <p>{{ $bill->bill_id }}</p>
            <h4>Reservation id</h4>
            <p>{{$bill->res_id}}</p>
            <h4>total price:</h4>
            <p>{{ $bill->total }}</p>
            <h4>payment type:</h4>
            <p>{{ $bill->payment_type }}</p>
            <h4>Bill State:</h4>
            <p>{{ $bill->state }}</p>
        

        </div>
        @endsection

        @section('script')

        @endsection