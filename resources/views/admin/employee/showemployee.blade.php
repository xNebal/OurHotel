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
    
   <div class="container pt-4 pb-4">
       <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
           <a class="navbar-brand" href="#"> EMPLOYEE</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
   
           <div class="collapse navbar-collapse" id="navbarsExample09">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('form/allemployee') }}">ALL EMPLOYEE <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('form/addemployee') }}">ADD EMPLOYEE</a>
                   </li>
               </ul>
               <form class="form-inline my-2 my-md-0">
               <input class="form-control" type="text" placeholder="Search" aria-label="Search">
               </form>
           </div>
       </nav>
   </div>
       
   <main role="main" class="flex-shrink-0">
       <div class="container">
           <h1>View Employee info</h1>
           <p>Name: Hala</p>
           <p>Email: hala@gmail.com</p>
       </div>
@endsection

@section('script')
    
@endsection