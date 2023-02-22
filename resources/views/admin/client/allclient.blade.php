@extends('layouts.master')
@section('title')
ALL client
@endsection

@section('css')
@endsection

@section('Dashboard')
@endsection

@section('content')

<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of Client</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">FULL NAME</th>
                        <th scope="col">EMAIL</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ( $clnt as $clnt )
                    <tr>
                        <th scope="row">{{ $clnt->id }}</th>
                        <td>{{ $clnt->full_name }}</td>
                        <td>{{ $clnt->email }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
@endsection

@section('script')
@endsection