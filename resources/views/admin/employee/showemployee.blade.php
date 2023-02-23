@extends('layouts.master')

@section('title')
VIEW EMPLOYEES
@endsection

@section('css')
@endsection

@section('Dashboard')
@endsection

@section('content')

<body class="d-flex flex-column h-100">

    <main role="main" class="flex-shrink-0">
        <div class="container">
        
            <h1>Employee info</h1>
            <h4>Employee id:</h4>
            <p>{{ $emp->id }}</p>
            <h4>Employee Full name:</h4>
            <p>{{ $emp->full_name }}</p>
            <h4>Employee Email:</h4>
            <p>{{ $emp->email }}</p>
            <h4>Employee State:</h4>
            <p>{{ $emp->state }}</p>
            <h4>Employee Type:</h4>
            <p>{{ $emp->type }}</p>
        </div>
        @endsection

        @section('script')

        @endsection