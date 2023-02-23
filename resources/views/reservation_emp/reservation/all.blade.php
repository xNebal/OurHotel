@extends('reservation_emp.layouts.master')

@section('title') 
   ALL RESERVATION
@endsection

@section('css')
@endsection

@section('Dashboard')
@endsection

@section('content')
<body class="d-flex flex-column h-100">
    
   <div class="container pt-4 pb-4">
       <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
           <a class="navbar-brand" href="#">Employee RESERVATION</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
   
           <div class="collapse navbar-collapse" id="navbarsExample09">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="">ADD RESERVATION</a>
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
           <h1>List of Rseservation</h1>
           <table class="table table-striped table-hover">
               <thead>
                   <tr>
                   <th scope="col">ID</th>
                   <th scope="col">ROOM ID</th>
                   <th scope="col">FROM DATE</th>
                   <th scope="col">TO DATE</th>
                   <th scope="col">STATUS</th>
                   <th scope="col">RESERVATIONIST</th>
                   <th scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                   <th scope="row">1</th>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td>
                       <a href=""><button class="btn btn-primary btn-sm">View</button></a>
                       <a href=""><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                       <button class="btn btn-sm">Delete</button>
                   </td>
                   </tr>
                   <tr>
                   <th scope="row">2</th>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td>
                       <a href=""><button class="btn btn-primary btn-sm">View</button></a>
                       <a href=""><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                       <button class="btn btn-sm">Delete</button>
                   </td>
                   </tr>
               </tbody>
           </table>
       </div> 
@endsection

@section('script')
    
@endsection