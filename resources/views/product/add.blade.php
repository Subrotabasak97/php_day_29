@extends('master')
@section('title')
    Product Add Page
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body">
                                <h4 class="text-success text-center ">{{Session::get('message')}}</h4>
                                <form action="{{route('store-product')}}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-md-3">Product Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="product_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Category Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="category" class="form-control">
                                        </div>
                                    </div> <div class="form-group row">
                                        <label class="col-md-3">Brand Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="brand" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Product Price</label>
                                        <div class="col-md-9">
                                            <input type="number" name="price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Product Description</label>
                                        <div class="col-md-9">
                                           <textarea class="form-control" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Product Image</label>
                                        <div class="col-md-9">
                                            <input type="file" name="image" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" value="Create a new product" class="btn btn-outline-success">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
