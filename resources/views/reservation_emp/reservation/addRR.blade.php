@extends('layouts.emp')
@section('title')
Add Reservation
@endsection

@section('css')
@endsection
@section('Dashboard')
@endsection
@section('content')
<div class="card">
    <div class="card-header">Add Resrvation</div>
    <div class="card-body">

        <form action="/storeres" method="post">
            {!! csrf_field() !!}
            <label>FROM DATE</label>
            <input type="date" name="from" id="from" class="form-control" min="<?php echo date("Y-m-d"); ?>" value="{{ $from }}">
            </br>
            <label>TO DATE</label>
            <input type="date" name="to" id="to" class="form-control" min="<?php echo date("Y-m-d"); ?>" value="{{ $to }}">
            </br>
            <label>ROOM ID</label>
            <select class="form-control" id="room_id" name="room_id">
                <option>select</option>
                @foreach ($rooms as $room)
                <option>{{ $room-> id }}</option>
                @endforeach
            </select>
            </br>
            <input type="text" name="state" id="state" value="Confirmed" class="form-control" style="display:none;">
            <input type="text" name="reservationist" id="reservationist" value="{{Auth::User()->id}}"
                class="form-control" style="display:none;">
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@endsection

@section('script')

@endsection