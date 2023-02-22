@extends('layouts.master')

@section('title')
EDIT EMPLOYEES
@endsection

@section('css')

@endsection

@section('Dashboard')

@endsection

@section('content')
<div class="card">
  <div class="card-body">

    <form action="{{ route('updateemp', $emp->id ) }}" method="post">
    @method('patch')    
                @csrf
      <label>Emp ID</label>
      <input type="text" name="id" id="id" class="form-control" value="{{ $emp-> id }}" disabled="disabled"></br>
      </br>
      <label>Full Name</label>
      <input type="text" name="full_name" id="full_name" class="form-control" value="{{ $emp-> full_name }}"></br>
      </br>
      <label>Email</label>
      <input type="text" name="email" id="email" class="form-control" value="{{ $emp-> email }}"></br>
      </br>
      <label>Type</label>
      <select class="form-control" id="type" name="type">
        <option>{{ $emp-> type }}</option>
        <option>kitchen_emp</option>
        <option>reservation_emp</option>
      </select>
      </br>
      <input type="submit" class="btn btn-success"></br>
    </form>

  </div>
</div>
@endsection

@section('script')

@endsection