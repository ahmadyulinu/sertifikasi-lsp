@extends('index')
@section('content')
<div class="product bg-white">
@php
    $fmt = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
@endphp
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-2"> Our Products</h2>
            <hr>
            
        </div>
    </div>
    <div class="row mt-3 m-2 justify-content-center">
                    @if (!empty($products))
                        @foreach($products as $card)
                        <div class="col-md-4 mx-2 my-2">
                            <div class="card border border-black shadow">
                                <img src="{{  asset('/storage/'.$card->photo)  }}" class="card-img-top" style="max-height: 400px;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$card->name}}</h5>
                                    
                                    <h5 class="card-title">{{ $fmt->formatCurrency($card->price, 'IDR') }}</h5>
                                    <p class="card-text">{{$card->desc}}</p>
                                        @method('delete')
                                        @csrf
                                        <a data-bs-toggle="modal" data-bs-target="#editProduct" class="btn btn-success" data-id="{{ $card->id }}">Edit Product</a>
                                        @csrf
                                        <a data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="{{ $card->id }}" class="btn btn-danger">Delete Product</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="col mx-2 my-2">
                            <h3>Product Masih Kosong...</h3>
                        </div>
                    @endif

                    <div class="row text-center my-2">
                         <button class="btn btn-primary w-80" data-bs-toggle="modal" data-bs-target="#addProduct">Create New Product</button>
                    </div>
        <!-- end card image -->
    </div>
</div>


<!-- modal create -->
<!-- Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
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
                    <div class="input-group mb-3 justify-content-center">
                        <label for="image" class="input-group">Photo</label>                        <input type="file" id="name" class="form-control" name="image" hidden>
                        <img src="https://via.placeholder.com/350" id="imgAdd" alt="" class="img-fluid text-center" style="max-width:250 px; max-height:300px;">
                        </a>
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

<!-- Modal Edit -->
<div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" enctype="multipart/form-data" id="formUpdate">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label for="name" class="input-group">Name</label>
                        <input type="text" id="nameEdit" class="form-control" placeholder="CBR-150" name='name'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="price" class="input-group">Price</label>
                        <input type="text" id="priceEdit" class="form-control" placeholder="Rp. 19.000.000" name='price'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="desc" class="input-group">Description</label>
                        <input type="text" id="descriptionEdit" class="form-control" placeholder="Produk terbaru dari Honda" name='desc'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="image" class="input-group">Photo Saat Ini</label>
                        <a onclick="clickfunct()">
                        <img src="" id="imgEdit" alt="" class="img-fluid text-center" style="max-width:250 px; max-height:300px;">
                        </a>
                        <input type="file" id="photoEdit" onchange="change(event)"class="form-control" name="image" hidden>
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

@include('components.modalDelete')

<script>
    function clickfunct() {
        $("#photoEdit").click();
        console.log('terklik');
    };

    function clickfunct2() {
        $("#photoAdd").click();
        console.log('terklik');
    };
    
    var source = <?php echo $json; ?>;
    console.log(source);
    $("#editProduct").on('show.bs.modal', function(e) {
        console.log('triggered');
        // Extract info from data-bs-* attributes
        let recipient = $(e.relatedTarget).data('id');
        
        var final = function(element) {
            return element.id == recipient;
        }

        var filtered_data = source.filter(final);
        $("#nameEdit").val(filtered_data[0].name);
        $("#priceEdit").val(filtered_data[0].price);
        $("#descriptionEdit").val(filtered_data[0].desc);
        $("#imgEdit").attr('src', '/storage/' + filtered_data[0].photo);


        $("#formUpdate").attr('action', `${path}/admin/products/update/`+recipient);
    });

    $("#modalDelete").on('show.bs.modal', function(e) {
        console.log('delete-triggered');
        // Extract info from data-bs-* attributes
        let recipient = $(e.relatedTarget).data('id');
        
        var final = function(element) {
            return element.id == recipient;
        }
        console.log('delete recipient' + recipient);
        $("#delete-button").attr('href', `${path}/admin/products/delete/`+recipient);
    });

    function change(event) {
      $("#imgEdit").attr('src', URL.createObjectURL(event.target.files[0]));
    };

    function change2(event) {
      $("#imgAdd").attr('src', URL.createObjectURL(event.target.files[0]));
    };
</script>
@endsection
