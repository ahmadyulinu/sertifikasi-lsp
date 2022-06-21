@extends('index')
@section('content')
<div class="article m-4 bg-white rounded">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-2"> Our latest articles</h2>
            <hr>
        </div>
    </div>
    <div class="row mt-3 m-2 justify-content-center">
        <!-- card image -->
                    @if (!empty($articles))
                        @foreach($articles as $card)
                        <div class="col-md-4 mx-2 my-4">
                            <div class="card border border-dark shadow" >
                                <img src="{{  asset('/storage/'.$card->photo)  }}" class="card-img-top" style="max-height: 400px; max-height: 320px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$card->title}}</h5>
                                    
                                    <h6 class="card-subtitle">by {{ $card->name }}</h5>
                                    <p class="card-text">{{$card->shortDesc}}</p>
                                        <a class="btn btn-outline-success" href="{{ route('artikel.show', $card->id) }}">Detail Artikel</a>
                                        <a data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="{{ $card->id }}" class="btn btn-danger">Delete Artikel</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="col mx-2 my-2">
                            <h3>Artikel Masih Kosong...</h3>
                        </div>
                    @endif

                    <div class="row text-center my-2">
                         <button id="clicked" class="btn btn-primary w-80" data-bs-toggle="modal" data-bs-target="#addArticle">Create New Article</button>
                    </div>
        <!-- end card image -->
    </div>
</div>

<!-- Modal Tambah -->

@include('components.modalArtikel')
@include('components.modalDelete')
<script>
    $("#clicked").on('click', function() {
        $("#addArticle").show();
    })
    console.log('are you working?>');
    function clickfunct() {
        $("#photoAdd").click();
        console.log('terklik');
    };

    function change(event) {
      $("#imgAdd").attr('src', URL.createObjectURL(event.target.files[0]));
    };

    $("#modalDelete").on('show.bs.modal', function(e) {
        console.log('delete-triggered');
        // Extract info from data-bs-* attributes
        let recipient = $(e.relatedTarget).data('id');
        
        var final = function(element) {
            return element.id == recipient;
        }
        console.log('delete recipient' + recipient);
        $("#delete-button").attr('href', `${path}/admin/artikel/delete/`+recipient);
    });
</script>

@endsection



