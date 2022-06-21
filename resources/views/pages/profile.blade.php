@extends('index')
@section('content')
<div class="article m-4 bg-white rounded">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-2"> Company Detail</h2>
            <hr>
        </div>
    </div>
    <div class="row mt-3 m-2 justify-content-center">
        @if (empty($data))
            <h4>Data masih kosong. Klik tombol di bawah ini untuk menambahkan nama & logo perusahaan</h4>
            <div class="row text-center my-2">
            <button id="clicked" class="btn btn-primary w-80" data-bs-toggle="modal" data-bs-target="#addLogo">Create New Article</button>
            </div>
        @else
            <div class="row">
                <div class="col">
                    <img src="{{ '/storage/'.$data[0]->logo }}" class="img-fluid rounded" alt="" style="width: 250px; height: 150px;">
                </div>

                <div class="col">
                    <h4 class="my-auto"> Nama Perusahaan: {{ $data[0]->name }}</h4>
                </div>
            </div>

            <div class="row my-2">
                <a data-bs-toggle="modal" data-bs-target="#editLogo" class="btn btn-success" data-id="{{ $data[0]->id }}">Edit Logo & Nama</a>
            </div>
        @endif
        
    </div>
</div>

<!-- Modal Tambah -->

@include('components.modalCompany')
@include('components.modalDelete')
<script>

    var source = <?php echo $json; ?>;
    
    $("#editLogo").on('show.bs.modal', function(e) {
        console.log('triggered');
        // Extract info from data-bs-* attributes
        let recipient = $(e.relatedTarget).data('id');
        
        var final = function(element) {
            return element.id == recipient;
        }

        var filtered_data = source.filter(final);
        $("#nameEdit").val(filtered_data[0].name);
        $("#imgEdit").attr('src', '/storage/' + filtered_data[0].logo);


        $("#formUpdate").attr('action', `${path}/admin/profile/update/`+recipient);
    });
    
    function clickfunct() {
        $("#logoAdd").click();
        console.log('terklik');
    };

    function clickfunct2() {
        $("#logoEdit").click();
        console.log('terklik');
    };

    function change(event) {
      $("#imgAdd").attr('src', URL.createObjectURL(event.target.files[0]));
    };

    function change2(event) {
      $("#imgEdit").attr('src', URL.createObjectURL(event.target.files[0]));
    };

    
</script>

@endsection



