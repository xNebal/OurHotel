@extends('layouts.emp')
@section('title')
EDIT BILL
@endsection
@section('css')
@endsection
@section('content')
<div class="card">
    <div class="card-header">Edit bill</div>
    <div class="card-body">

        <form action="{{ route('updatebill', $bill->bill_id ) }}" method="post">
            @method('patch')
            @csrf
            <label>Bill ID</label>
            <input type="text" name="bill_id" id="bill_id" class="form-control" value="{{$bill->bill_id}}" >
            </br>
            <label>Reservation ID</label>
            <input type="text" name="res_id" id="res_id" class="form-control" value="{{$res->res_id}}" disabled>
            </br>
            <label>total price</label>
            <input type="text" name="total" id="total" class="form-control" value="{{$bill->total}}" disabled>
            </br>
            <label>payment type</label>
            <input type="text" name="payment_type" id="payment_type" class="form-control" value="{{$bill->payment_type}}" disabled>
            </br>
            <label>State</label>
            <select class="form-control" id="state" name="state">
                <option>{{$bill->state}}</option>
                <option>Closed</option>
                <option>Open</option>
            </select>
            </br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>

    </div>
</div>
@endsection
@section('script')
@endsection