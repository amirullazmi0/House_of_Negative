@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="release">
        <div class="pop mb-3 shadow-sm border">
            <h1 class="text-center ">DETAIL</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 mb-5">
                <div class="card shadow-sm border">
                    <div class="card-body">
                        <div class="d-flex justify-content-center m-3">
                            @if($release->artwork)
                            <img class="img-fluid img-detail-talent" src="<?= asset('storage/' . $release->artwork); ?>" alt="">
                            @else
                            <img class="img-fluid img-detail-talent" src="/img/default.jpg" alt="">
                            @endif
                        </div>
                        <div class="release-detail p-3">
                            <div class="row detail-bandname">
                                <p class="col-5">Band Name</p>
                                <p class="col-1">:</p>
                                <p class="col-6"> {{ $release->talent_name }} </p>
                            </div>
                            <div class="row detail-title">
                                <p class="col-5">Title</p>
                                <p class="col-1">:</p>
                                <p class="col-6"> {{ $release->title }} </p>
                            </div>
                            <div class="row detail-typetalent">
                                <p class="col-5">Type Talent</p>
                                <p class="col-1">:</p>
                                <p class="col-6">
                                    <a class="text-decoration-none text-marah" href="/admin/talent/{{ $release->talent->slug }}">
                                        {{ $release->talent->name }}
                                    </a>
                                </p>
                            </div>
                            <div class="row detail-typerelease">
                                <p class="col-5">Type Release</p>
                                <p class="col-1">:</p>
                                <p class="col-6">
                                    <a class="text-decoration-none text-marah" href="/admin/category/{{ $release->category->slug }}">
                                        <?= $release->category->name; ?>
                                    </a>
                                </p>
                            </div>
                            <div class="row detail-desc">
                                <p class="col-5">Description</p>
                                <p class="col-1">:</p>
                                <div class="col-lg-6">
                                    <?= $release->desc; ?>
                                </div>
                            </div>
                            <div class="row detail-daterelease">
                                <p class="col-5">Date Release</p>
                                <p class="col-1">:</p>
                                <p class="col-6">{{ $date }}</p>
                            </div>
                            <div class="row detail-email">
                                <p class="col-5">Email</p>
                                <p class="col-1">:</p>
                                <p class="col-6">{{ $release->email }}</p>
                            </div>
                            <div class="row detail-ig">
                                <p class="col-5">Instagram</p>
                                <p class="col-1">:</p>
                                <p class="col-6">{{ $release->instagram }}</p>
                            </div>
                            <div class="row detail-artwork">
                                <p class="col-5">Artwork</p>
                                <p class="col-1">:</p>
                                <div class="col-lg-6">
                                    @if($release->talent_photo)
                                    <img class="img-fluid img-detail-artwork" src="<?= asset('storage/' . $release->talent_photo); ?>" alt="">
                                    @else
                                    <img class="img-fluid img-detail-artwork" src="/img/default.jpg" alt="">
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <p>
                                <small>Updated : <?= $release->updated_at->diffForHumans(); ?></small>
                            </p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-sm btn-edit" href="/admin/release/<?= $release->slug; ?>/edit">
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </a>
                                <a class="btn btn-sm btn-delete ms-2" href="/admin/release/delete/<?= $release->slug; ?>" onclick="return confirm('Are you sure to delete?')">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection