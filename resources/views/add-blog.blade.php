@extends('master')
@section('title')
    Blog Page
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-header">
                        Add blog
                    </div>
                    <div class="card-body">
                        <h4 class="text-success text-center ">{{Session::get('message')}}</h4>
                        <form action="{{route('add-blog')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Description</label>
                                <div class="col-md-9">
                                 <textarea class="form-control" required name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Author</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="author">
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
