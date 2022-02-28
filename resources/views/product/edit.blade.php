@extends('master')
@section('title')
    Product Edit
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
                                <form action="{{route('update-product',$product->id)}}" method="POST">

                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-md-3">Product Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Category Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="category" class="form-control"  value="{{$product->category_name}}">
                                        </div>
                                    </div> <div class="form-group row">
                                        <label class="col-md-3">Brand Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="brand" class="form-control" value="{{$product->brand_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Product Price</label>
                                        <div class="col-md-9">
                                            <input type="number" name="price" class="form-control" value="{{$product->price}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Product Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="description">{{$product->description}}</textarea>
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
                                            <input type="submit" value="Update product" class="btn btn-outline-success">
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
