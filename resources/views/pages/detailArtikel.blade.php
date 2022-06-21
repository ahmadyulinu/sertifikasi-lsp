@extends('index')
@section('content')
<div class="article m-4 bg-white rounded">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-2"> Detail Artikel</h2>
            <hr>
        </div>
    </div>
    <div class="row mt-3 ms-2 w-80 justify-content-center">
    <div class="article m-2">
        <div class="row">
            <div class="col">
                <h3>{{ $data->title}}</h3>
                <span style="color: grey;">by {{$data->name}}</span>

                <div class="text-center">
                    <img src="{{ !empty($data) ? '/storage/'.$data->photo : '' }}" alt="" class="img-fluid rounded" style="max-width: 1000px; max-height: 420px;">
                </div>
                <hr>
                <div class="m-3 border border-black rounded p-5">
                    <p>
                        {{$data->desc}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            <a class="btn btn-outline-success w-100" data-bs-toggle="modal" data-bs-target="#editArticle" data-id="{{ $data->id }}">Edit Artikel</a>
            </div>
            <div class="col-lg-2">
            <a data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="{{ $data->id }}" class="btn btn-danger w-100">Delete Artikel</a>
            </div>
            
        </div>
        
    </div>
    </div>
</div>

@include('components.modalDelete')
@include('components.modalArtikel')
<!-- Modal Tambah -->
<script>
   
    console.log('are you working?>');
    function clickfunct() {
        $("#photoEdit").click();
        console.log('terklik');
    };

    function change(event) {
      $("#imgEdit").attr('src', URL.createObjectURL(event.target.files[0]));
    };

    var source = <?php echo $json; ?>;
    console.log(source);
    $("#editArticle").on('show.bs.modal', function(e) {
        console.log('triggered');
        // Extract info from data-bs-* attributes
        let recipient = $(e.relatedTarget).data('id');
        console.log(recipient);
        
        var final = function(element) {
            return element.id == recipient;
        }

        var filtered_data = source.filter(final);
        $("#editName").val(filtered_data[0].name);
        $("#editTitle").val(filtered_data[0].title);
        $("#editSummary").val(filtered_data[0].shortDesc);
        $("#editContent").val(filtered_data[0].desc);
        $("#imgEdit").attr('src', '/storage/' + filtered_data[0].photo);


        $("#formUpdate").attr('action', `${path}/admin/artikel/update/`+recipient);
    });

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



