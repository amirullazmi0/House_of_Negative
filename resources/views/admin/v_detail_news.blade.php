@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="release">
        <div class="pop mb-3 shadow-sm border">
            <h1 class="text-center text-uppercase fw-bold"><?= $news->title; ?></h1>
        </div>
        <div class="card shadow-sm border mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="d-flex justify-content-center m-3">
                            @if($news->photo)
                            <img class="img-fluid img-detail-talent" src="<?= asset('storage/' . $news->photo); ?>" alt="">
                            @else
                            <img class="img-fluid img-detail-talent" src="/img/default.jpg" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="release-detail p-3">
                            <div class="row detail-bandname mb-3">
                                <h2 class="text-uppercase fw-bold text-center"><?= $news->title; ?></h4>
                            </div>
                            <div class="detail-desc">
                                <?= $news->desc; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <hr>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-sm btn-edit m-1" href="/admin/news/<?= $news->slug; ?>/edit">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </a>
                            <a class="btn btn-sm btn-delete m-1" onclick="return confirm('Are you sure to delete ?')" href="/admin/news/delete/<?= $news->slug; ?>">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </a>
                        </div>
                        <p>
                            <small>Updated : <?= $news->updated_at->diffForHumans(); ?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection