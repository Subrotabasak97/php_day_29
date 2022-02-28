@extends('master')

@section('title')
    Manage Student
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Manage  Blogs
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <td>Sl no</td>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Author</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->description}}</td>
                                            <td>{{$blog->author}}</td>
                                            <td>
                                                <a href="{{route('edit-blog',$blog->id)}}" class="btn btn-sm btn-success"> <i class="fa fa-edit"></i> </a>
                                                <a href="" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a> </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
