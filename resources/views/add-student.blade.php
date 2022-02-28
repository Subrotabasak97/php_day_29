@extends('master')
@section('title')
    Student Page
@endsection

@section('content')
   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col-md-8 mx-auto">
                   <div class="card-header">
                       Add Student
                   </div>
                   <div class="card-body">
                       <h4 class="text-success text-center ">{{Session::get('message')}}</h4>
                       <form action="{{route('add-student')}}" method="POST">
                           @csrf
                           <div class="form-group row">
                               <label class="col-md-3">Name</label>
                               <div class="col-md-9">
                                   <input type="text" class="form-control" name="name">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="col-md-3">Email</label>
                               <div class="col-md-9">
                                   <input type="email" class="form-control" name="email">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="col-md-3">Mobile</label>
                               <div class="col-md-9">
                                   <input type="number" class="form-control" name="mobile">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="col-md-3"></label>
                               <div class="col-md-9">
                                   <input type="submit" class="btn btn-outline-success" value="submit" >
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection
