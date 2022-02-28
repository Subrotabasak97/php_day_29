@extends('master')

@section('title')
    Manage Product
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Manage  Products
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <td>Sl no</td>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$product->product_name}}</td>
                                            <td>{{$product->category_name}}</td>
                                            <td>{{$product->brand_name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->description}}</td>
                                            <td><img src="{{asset($product->image)}}" alt="" height="100" width="120"/></td>
                                            <td>
                                                <a href="{{route('edit-product',$product->id)}}" class="btn btn-sm btn-success"> <i class="fa fa-edit"></i> </a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="deleteProduct({{$product->id}})"> <i class="fa fa-trash"></i> </a>

                                                <form action="{{route('delete-product',$product->id)}}" id="deleteProductForm{{$product->id}}" method="post">
                                                    @csrf
                                                </form>

                                            </td>
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

    <script>
        function deleteProduct(id) {
            event.preventDefault();
            var check = confirm('ok');
            if(check)
            {
                document.getElementById('deleteProductForm'+id).submit();
            }
        }
    </script>
@endsection
