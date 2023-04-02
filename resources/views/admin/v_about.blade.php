@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="about">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="pop mb-3 border shadow-sm">
                    <h1 class="text-center">ABOUT HON</h1>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card border shadow-sm mb-5">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label" for="title">Instagram</label>
                                    <input class="form-control form-control-sm" type="text" name="title" id="title" autofocus>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label" for="title">Facebook</label>
                                    <input class="form-control form-control-sm" type="text" name="title" id="title" autofocus>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label" for="title">email</label>
                                    <input class="form-control form-control-sm" type="text" name="title" id="title" autofocus>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label" for="desc">Description</label>
                                    <form …>
                                        <input class="@error('desc')is-invalid @enderror" id="desc" type="hidden" name="desc">
                                        <trix-editor class="form-control @error('desc') is-invalid @enderror" input="desc"></trix-editor>
                                    </form>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="artwork" for="poster">Logo</label>
                                    <img class="img-preview img-fluid" alt="">
                                    <input class="form-control form-control-sm" type="file" id="poster" name="poster" onchange="previewImage">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="artwork" for="poster">Foto / Gif</label>
                                    <img class="img-preview img-fluid" alt="">
                                    <input class="form-control form-control-sm" type="file" id="poster" name="poster" onchange="previewImage">
                                </div>
                                <hr class="mt-3">
                                <div class="d-grid gap-2 col-4 p-3 mx-auto">
                                    <button class="btn btn-detail btn-sm fw-bold text-uppercase p-2" type="submit">Update About</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection