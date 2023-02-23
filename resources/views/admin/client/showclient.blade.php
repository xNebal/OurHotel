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
        
            <h1>Client info</h1>
            <h4>Client id:</h4>
            <p>{{ $client->id }}</p>
            <h4>Client Full name:</h4>
            <p>{{ $client->full_name }}</p>
            <h4>Client Email:</h4>
            <p>{{ $client->email }}</p>
            <h4>Client State:</h4>
            <p>{{ $client->state }}</p>
        </div>
        @endsection

        @section('script')

        @endsection