@extends('admin.v_template')

@section('content')

<div class="container">
    <div class="release">
        <div class="pop mb-3 shadow-sm border">
            <h1 class="text-center text-uppercase"><a class="text-marah text-decoration-none" href="/admin/category"> Category : </a><?= $talent; ?></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mb-5 shadow-sm border">
                    <div class="card-body">
                        <div class="row justify-content-end">
                            <div class="col-md-6">
                                <form action="/admin/category/<?= $slug; ?>">
                                    <div class="input-group mb-3">
                                        <div class="input-group">
                                            <input type="text" name="keyword" class="form-control" placeholder="Search" value="<?= request('keyword'); ?>">
                                            <button class="btn btn-delete" type="post">
                                                <span class="material-symbols-outlined">
                                                    search
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            @if ($release->count())
                            @foreach($release as $release)
                            <div class="col-lg-4">
                                <div class="card shadow-sm border mb-4">
                                    <div class="text-center">
                                        @if($release->talent_photo)
                                        <img class="img-fluid img-release" src="<?= asset('storage/' . $release->talent_photo); ?>" alt="">
                                        @else
                                        <img class="img-fluid img-release" src="/img/default.jpg" alt="">
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <h5 class="">
                                            <a class="text-marah text-decoration-none fw-bold" href="/admin/release/<?= $release->slug; ?>"><?= $release->talent_name; ?></a>
                                        </h5>
                                        <small class="text-hitam">
                                            <?= $release->title; ?>
                                        </small>
                                        <div class="text-justify">
                                            <p class="">
                                                <?= $release->excerpt; ?>
                                                <a class="text-decoration-none" href="/admin/release/<?= $release->slug; ?>">
                                                    <small class=" text-marah">.....</small>
                                                </a>
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-end">
                                            <a class="btn btn-sm btn-detail m-1" href="/admin/release/<?= $release->slug; ?>">
                                                <span class="material-symbols-outlined">
                                                    sticky_note_2
                                                </span>
                                            </a>
                                            <a class="btn btn-sm btn-edit m-1" href="/admin/release/<?= $release->slug; ?>/edit">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </a>
                                            <a class="btn btn-sm btn-delete m-1" onclick="return confirm('Are you sure to delete ?')" href="/admin/release/delete/<?= $release->slug; ?>">
                                                <span class="material-symbols-outlined">
                                                    delete
                                                </span>
                                            </a>
                                        </div>
                                        <small><?= $release->created_at->diffForHumans(); ?></small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h3 class="text-center mt-5 mb-5">DATA NOT FOUND</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection