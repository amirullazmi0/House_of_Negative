@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="release">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="pop mb-3 shadow-sm border">
                    <h1 class="text-center">ADD NEW MERCH</h1>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-5 shadow-sm border">
                    <div class="card-body">
                        <form class="p-4" action="/admin/news/" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-2">
                                    <img class="img-fluid merch-photo-add" src="/img/marchandise/morfem.jpg" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="img-fluid merch-photo-add" src="/img/marchandise/morfemputih.jpg" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="img-fluid merch-photo-add" src="/img/marchandise/morfem.jpg" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="img-fluid merch-photo-add" src="/img/marchandise/morfem.jpg" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="img-fluid merch-photo-add" src="/img/marchandise/morfem.jpg" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="img-fluid merch-photo-add" src="/img/marchandise/morfem.jpg" alt="">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6 mb-3">
                                    <label class="artwork mb-2" for="poster">Merch Photo</label>
                                    <img class="img-preview img-fluid" alt="">
                                    <input class="form-control form-control-sm" type="file" id="photo" name="photo" onchange="previewImage">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input class="form-control form-control-sm" value="" type="text" name="title" id="title" value="<?= old('title'); ?>" required>
                                    <input class="form-control form-control-sm" type="text" name="slug" id="slug" value="<?= old('slug'); ?>" hidden>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label" for="desc">Description</label>
                                    <form …>
                                        <input class="@error('desc')is-invalid @enderror" id="desc" type="hidden" name="desc" value="<?= old('desc'); ?>">
                                        <trix-editor class="form-control @error('desc') is-invalid @enderror" input="desc"></trix-editor>
                                    </form>
                                </div>
                                <hr class="mt-3">
                                <div class="d-grid gap-2 col-4 p-3 mx-auto">
                                    <button class="btn btn-detail btn-sm fw-bold text-uppercase p-2" type="submit">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    function previewImage() {
        const image = document.querySelector('#artwork');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    $("#title").keyup(function() {
        var str = $(this).val();
        var trims = $.trim(str);
        var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
        $("#slug").val(slug.toLowerCase());
    })

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection