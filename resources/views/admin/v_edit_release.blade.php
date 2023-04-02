@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="release">
        <div class="pop mb-3 shadow-sm border">
            <h1 class="text-center">CREATE NEW RELEASE</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mb-5 shadow-sm border">
                    <div class="card-body">
                        <form class="p-4" action="/admin/release/<?= $release->slug; ?>/update" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label" for="talent_name">Talent Name</label>
                                    <input class="form-control form-control-sm @error('talent_name') is-invalid @enderror" type="text" name="talent_name" id="talent_name" value="<?= old('talent_name', $release->talent_name); ?>" autofocus required>
                                    @error('talent_name')
                                    <small class="text-danger"> <?= $message; ?></small>
                                    @enderror
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input class="form-control form-control-sm @error('title') is-invalid @enderror" type="text" name="title" id="title" value="<?= old('title', $release->title); ?>" required>
                                    <input class="form-control form-control-sm @error('title') is-invalid @enderror" type="text" name="slug" id="slug" value="<?= old('slug', $release->slug); ?>" required hidden>
                                    @error('title')
                                    <small class="text-danger"> <?= $message; ?></small>
                                    @enderror
                                </div>
                                <!-- <div class="col-lg-3 mb-3">
                                    <label class="form-label" for="title">Title</label>
                                </div> -->
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label" for="talent_id">Type</label>
                                    <select class="form-select form-select-sm" id="talent_id" name="talent_id">
                                        @foreach($talent as $talent)
                                        @if( old('talent_id', $release->talent_id) == $talent->id)
                                        <option class="option" value="<?= $talent->id; ?>" selected><?= $talent->name; ?></option>
                                        @else
                                        <option class="option" value="<?= $talent->id; ?>"><?= $talent->name; ?></option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label" for="category_id">Category</label>
                                    <select class="form-select form-select-sm form-new" id="category_id" name="category_id">
                                        @foreach($category as $category)
                                        @if(old('category_id', $release->category_id) == $category->id)
                                        <option value="<?= $category->id; ?>" selected><?= $category->name; ?></option>
                                        @else
                                        <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label" for="desc">Description</label>
                                    <form …>
                                        <input class="@error('desc')is-invalid @enderror" id="desc" type="hidden" name="desc" value="<?= old('desc', $release->desc); ?>">
                                        <trix-editor class="form-control @error('desc') is-invalid @enderror" input="desc"></trix-editor>
                                    </form>
                                    @error('desc')
                                    <small class="text-danger"> <?= $message; ?></small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" placeholder="name@example.com" id="email" name="email" value="<?= old('email', $release->email); ?>" required>
                                    @error('email')
                                    <small class="text-danger"> <?= $message; ?></small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label" for="instagram">Instagram</label>
                                    <input class="form-control form-control-sm @error('instagram') is-invalid @enderror" type="text" placeholder="example : houseofnegative" id="instagram" name="instagram" value="<?= old('instagram', $release->instagram); ?>" required>
                                    @error('instagram')
                                    <small class="text-danger"> <?= $message; ?></small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="artwork" for="artwork">Artwork</label>
                                    <input class="form-control form-control-sm @error('artwork') is-invalid @enderror" type="file" id="artwork" name="artwork">
                                    <input type="text" value="<?= $release->artwork; ?>" name="artwork_lama" hidden>
                                    @error('artwork')
                                    <small class="text-danger"> <?= $message; ?></small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="talent_photo " for="talent_photo">talent Photo</label>
                                    <input class="form-control form-control-sm @error('talent_photo') is-invalid @enderror" type="file" id="talent_photo" name="talent_photo" value="<?= $release->talent_photo; ?>">
                                    <input type="text" value="<?= $release->talent_photo; ?>" name="photo_lama" hidden>
                                    @error('talent_photo')
                                    <small class="text-danger"> <?= $message; ?></small>
                                    @enderror
                                </div>
                                <hr class="mt-3">
                                <div class="d-grid gap-2 col-4 p-3 mx-auto">
                                    <button class="btn btn-detail btn-sm fw-bold text-uppercase p-2" type="submit">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/admin/release/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
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