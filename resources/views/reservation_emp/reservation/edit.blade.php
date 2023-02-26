@extends('layouts.emp')
@section('title')
EDIT RESERVATION
@endsection

@section('css')
@endsection

@section('content')
<div class="card">
    <div class="card-header">Edit Reservation</div>
    <div class="card-body">

        <form action="{{ route('updateres', $res->res_id ) }}" method="post">
            
            @method('patch')
            @csrf
            <label>Reservation ID</label>
            <input type="text" name="res_id" id="res_id" class="form-control" value="{{$res->res_id}}">
            </br>
            <label>ROOM ID</label>
            <select class="form-control" id="room_id" name="room_id">
                <option>{{$res->room_id}}</option>
                @foreach ($rooms as $room)
                <option>{{ $room-> id }}</option>
                @endforeach
            </select>
            </br>
            <label>From</label>
            <input type="date" name="from" id="from" class="form-control" value="{{$res->from}}">
            </br>
            <label>To</label>
            <input type="date" name="to" id="to" class="form-control" value="{{$res->to}}">
            </br>
            <label>State</label>
            <select class="form-control" id="state" name="state">
                <option>{{$res->state}}</option>
                <option>Confirmed</option>
                <option>Canceled</option>
            </select>
            </br>
            <input type="text" name="reservationist" id="reservationist" value="{{Auth::User()->id}}"
                class="form-control" style="display:none;">
            </br>
            <input type="submit" value="Save" class="btn btn-success">

        </form>

    </div>
</div>
@endsection

@section('script')

@endsection