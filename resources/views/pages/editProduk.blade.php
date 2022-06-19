@extends('index')
@section('content')
<div class="product">
    <h1>Edit Products</h1>
    <form action="/products/{{$products->id}}/update" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Products</h5>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <label for="name" class="input-group">Name</label>
                    <input type="text" id="name" class="form-control" placeholder="CBR-150" name='name' value="{{$products->name}}">
                </div>
                <div class="input-group mb-3">
                    <label for="price" class="input-group">Price</label>
                    <input type="text" id="name" class="form-control" placeholder="Rp. 19.000.000" name='price' value="{{$products->price}}">
                </div>
                <div class="input-group mb-3">
                    <label for="desc" class="input-group">Description</label>
                    <input type="text" id="name" class="form-control" placeholder="Produk terbaru dari Honda" name='desc' value="{{$products->desc}}">
                </div>
                <div class="input-group mb-3">
                    <img src="{{asset('storage/'.$products->photo)}}" alt="" class="w-25 h-auto">
                    <label for="image" class="input-group">Photo</label>
                    <input type="file" id="name" class="form-control" name="image">
                </div>
            </div>
            <div class="modal-footer">
                <a href="/products" class="btn btn-secondary" data-bs-dismiss="modal">Back</a>
                <button class="btn btn-primary" type="submit">Save Changes</button>
            </div>
        </div>
    </form>
</div>


<!-- modal create -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">

    </div>
</div>
@endsection
