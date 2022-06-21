<div class="modal fade" id="addArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label for="name" class="input-group">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Penulis artikel..." name='name'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="name" class="input-group">Title</label>
                        <input type="text" id="title" class="form-control" placeholder="Judul artikel..." name='title'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="shortDesc" class="input-group">Summary</label>
                        <textarea type="text" id="name" class="form-control" placeholder="Ringkasan artikel..." name='shortDesc'></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <label for="shortDesc" class="input-group">Isi Artikel</label>
                        <textarea type="text" id="name" class="form-control" placeholder="Ringkasan artikel..." name='desc'></textarea>
                    </div>
                    <div class="input-group mb-3 justify-content-center">
                        <label for="image" class="input-group">Photo</label>
                        <a onclick="clickfunct()">
                        <img src="https://via.placeholder.com/350" id="imgAdd" alt="" class="img-fluid text-center" style="max-width:250 px; max-height:300px;"></a>
                        <input type="file" onchange="change(event)" id="photoAdd" class="form-control" name="photo" hidden>
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

<div class="modal fade" id="editArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="" method="post" enctype="multipart/form-data" id="formUpdate">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label for="name" class="input-group">Name</label>
                        <input type="text" id="editName" class="form-control" placeholder="Penulis artikel..." name='name'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="name" class="input-group">Title</label>
                        <input type="text" id="editTitle" class="form-control" placeholder="Judul artikel..." name='title'>
                    </div>
                    <div class="input-group mb-3">
                        <label for="shortDesc" class="input-group">Summary</label>
                        <textarea type="text" id="editSummary" class="form-control" placeholder="Ringkasan artikel..." name='shortDesc'></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <label for="shortDesc" class="input-group">Isi Artikel</label>
                        <textarea type="text" id="editContent" class="form-control" placeholder="Ringkasan artikel..." name='desc'></textarea>
                    </div>
                    <div class="input-group mb-3 justify-content-center">
                        <label for="image" class="input-group">Photo</label>
                        <a onclick="clickfunct()">
                        <img src="https://via.placeholder.com/350" id="imgEdit" alt="" class="img-fluid text-center" style="max-width:250 px; max-height:300px;"></a>
                        <input type="file" onchange="change(event)" id="photoEdit" class="form-control" name="photo" hidden>
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