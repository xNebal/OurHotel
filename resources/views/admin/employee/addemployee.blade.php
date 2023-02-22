@extends('layouts.master')

@section('title')
ADD EMPLOYEES
@endsection

@section('css')

@endsection

@section('Dashboard')

@endsection

@section('content')
<div class="card">
  <div class="card-body">

    <form action="/storeemp" method="post">
      @csrf
      <label>Full Name</label>
      <input type="text" name="full_name" id="full_name" class="form-control"></br>
      </br>
      <label>Email</label>
      <input type="text" name="email" id="email" class="form-control"></br>
      </br>
      <label>Password</label>
      <input type="text" name="password" id="password" class="form-control"></br>
      </br>
      <label>Type</label>
      <select class="form-control" id="type" name="type">
        <option>Select</option>
        <option>kitchen_emp</option>
        <option>reservation_emp</option>
      </select>
      </br>
      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@endsection

@section('script')

@endsection