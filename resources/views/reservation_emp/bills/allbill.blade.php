@extends('layouts.emp')

@section('title')
bills
@endsection

@section('css')
@endsection

@section('Dashboard')
@endsection

@section('content')

<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of Bills</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Bill ID</th>
                        <th scope="col">Reservation ID</th>
                        <th scope="col">State</th>
                        <th scope="col">payment type</th>
                        <th scope="col">Total price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $bill)
                    <tr>
                        <th scope="row">{{$bill->bill_id}}</th>
                        <td>{{$bill->res_id}}</td>
                        <td>{{$bill->state}}</td>
                        <td>{{$bill->payment_type}}</td>
                        <td>{{$bill->total}}</td>
                        <td>
    
                            <a href="{{ route('/reservation_emp/bills/editbill', $bill->bill_id) }}"><button class="btn btn-outline-primary btn-sm">Edit</button></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endsection

        @section('script')

        @endsection