@extends('layouts.master')
@section('title')
ALL EMPLOYEES
@endsection
@section('css')
@endsection
@section('Dashboard')
@endsection
@section('content')

<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of Employee</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">FULL NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">STATE</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $emps as $emp )
                    <tr>
                        <th scope="row">{{ $emp->id }}</th>
                        <td>{{ $emp->full_name }}</td>
                        <td>{{ $emp->email }}</td>
                        <td>{{ $emp->type }}</td>
                        <td>{{ $emp->state }}</td>
                        <td>
                        <a href="{{ route('/admin/employee/showemployee', $emp->id) }}"><button
                                    class="btn btn-outline-primary btn-sm">Show</button></a>
                            <a href="{{ route('/admin/employee/editemployee', $emp->id) }}"><button
                                    class="btn btn-outline-primary btn-sm">Edit</button></a>
                            <a href="{{ route('destroyemp', $emp->id) }}"><button
                                    class="btn btn-primary btn-sm">Delete</button></a>
                        </td>
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