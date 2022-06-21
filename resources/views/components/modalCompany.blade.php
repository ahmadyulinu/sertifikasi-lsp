<div class="modal fade" id="addLogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-80">
        <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Logo dan Nama Perusahaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label for="name" class="input-group">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Nama Perusahaan" name='name'>
                    </div>
                    <div class="input-group mb-3 justify-content-center">
                        <label for="image" class="input-group">Photo</label>
                        <a onclick="clickfunct()">
                        <img src="https://via.placeholder.com/350" id="imgAdd" alt="" class="img-fluid text-center" style="max-width:250 px; max-height:300px;"></a>
                        <input type="file" onchange="change(event)" id="logoAdd" class="form-control" name="logo" hidden>
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

<div class="modal fade" id="editLogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-80">
        <form method="post" enctype="multipart/form-data" id="formUpdate">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Logo dan Nama Perusahaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label for="name" class="input-group">Name</label>
                        <input type="text" id="nameEdit" class="form-control" placeholder="Nama perusahaan..." name='name'>
                    </div>
                    <div class="input-group mb-3 justify-content-center">
                        <label for="image" class="input-group">Photo</label>
                        <a onclick="clickfunct2()">
                        <img src="https://via.placeholder.com/350" id="imgEdit" alt="" class="img-fluid text-center" style="max-width:250 px; max-height:300px;"></a>
                        <input type="file" onchange="change2(event)" id="logoEdit" class="form-control" name="logo" hidden>
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