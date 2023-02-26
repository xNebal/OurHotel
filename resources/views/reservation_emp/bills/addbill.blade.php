@extends('layouts.emp')
@section('title')
Add bill
@endsection
@section('css')
@endsection
@section('Dashboard')
@endsection
@section('content')
<div class="card">
    <div class="card-header">Add bill</div>
    <div class="card-body">
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
        <form action="/storebill" method="post">
    
            @csrf
            <label>Reservation ID</label>
            <input type="text" name="res_id" id="res_id" class="form-control" value="{{ $res->res_id }}" >
            </br>
            <label>total price</label>
            <input type="text" name="total" id="total" class="form-control" value="{{$total}}" >
            </br>
            <label>payment type</label>
            <select class="form-control" id="payment_type" name="payment_type">
                <option selected>Cash</option>
                <option >Credit</option>
            </select>
            </br>
            <label>State</label>
            <select class="form-control" id="state" name="state">
                <option>Closed</option>
                <option selected>Open</option>
            </select>
            </br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>


    </div>
</div>

@endsection

@section('script')

@endsection