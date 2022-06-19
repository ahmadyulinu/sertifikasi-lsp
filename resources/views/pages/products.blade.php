@extends('index')
@section('content')
<div class="product">
    <div class="row">
        <div class="col">
            <h1 class="text-center"> Our Products</h1>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create New Product</button>
        </div>
    </div>
    <div class="row mt-5 ms-2">
        <!-- card image -->
        @foreach($products as $card)
        <div class="col mx-2 my-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('storage/'.$card->photo)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$card->name}}</h5>
                    <h5 class="card-title">{{$card->price}}</h5>
                    <p class="card-text">{{$card->desc}}</p>
                    <form action="/products/{{$card->id}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="/products/{{$card->id}}" class="btn btn-success">Edit Product</a>
                        @csrf
                        <button type="submit" href="#" class="btn btn-danger">Delete Product</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <!-- end card image -->
    </div>
</div>


<!-- modal create -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/products" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label for="name" class="input-group">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="CBR-150" name='name'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="price" class="input-group">Price</label>
                        <input type="text" id="name" class="form-control" placeholder="Rp. 19.000.000" name='price'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="desc" class="input-group">Description</label>
                        <input type="text" id="name" class="form-control" placeholder="Produk terbaru dari Honda" name='desc'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="image" class="input-group">Photo</label>
                        <input type="file" id="name" class="form-control" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
