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

        <form action="{{ route('/reservation_emp/reservation/addRR')}}" method="post">
            {!! csrf_field() !!}
            <label>FROM DATE</label>
            <input type="date" name="from" id="txtDate" class="form-control" min="<?php echo date("Y-m-d"); ?>">
            </br>
            <label>TO DATE</label>
            <input type="date" name="to" id="to" class="form-control" min="<?php echo date("Y-m-d"); ?>">
            </br>
            <input type="submit" value="Next" class="btn btn-success"></br>
        </form>


    </div>
</div>

@endsection

@section('script')

@endsection