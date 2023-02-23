@extends('reservation_emp.layouts.master')

@section('title') 
    EDIT RESERVATION
@endsection

@section('css')

@endsection

@section('Dashboard')

@endsection

@section('content')
<div class="card">
    <div class="card-header">EDIT</div>
    <div class="card-body">
        
        <form action="" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="" id="id" />
          <label> Id</label></br>
          <input type="text" name="name" id="name" value="" class="form-control"></br>
          <label>ROOM ID</label></br>
          <input type="text" name="name" id="name" value="" class="form-control"></br>
          <label>FROM DATE</label></br>
          <input type="text" name="address" id="address" value="" class="form-control"></br>
          <label>TO DATE</label></br>
          <input type="text" name="name" id="name" value="" class="form-control"></br>
          <label>Status</label></br>
          <input type="text" name="name" id="name" value="" class="form-control"></br>
          <label>RESERVATIONIST</label></br>
          <input type="" name="" id="" value="" class="form-control"></br>
          <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>    
@endsection

@section('script')
    
@endsection