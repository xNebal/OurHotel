
@extends('layouts.master')

@section('title') 
ADMIN DASH     
@endsection

@section('css')
@endsection

@section('content')
<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Log of Employee</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">rowID</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action type</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $emp as $emp )
                    <tr>
                        <th scope="row">{{ $emp->id }}</th>
                        <td>{{ $emp->msg }}</td>
                        <td>{{ $emp->type }}</td>
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