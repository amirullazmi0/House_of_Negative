@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="release">
        <div class="pop mb-3 shadow-sm border">
            <h1 class="text-center text-uppercase fw-bold"><?= $merch->title; ?></h1>
        </div>
        <div class="card shadow-sm border mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-center m-3">
                            @if($merch->photo)
                            <img class="img-fluid img-detail-talent" src="<?= asset('storage/' . $merch->photo); ?>" alt="">
                            @else
                            <img class="img-fluid img-detail-talent" src="/img/default.jpg" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-8 ">
                        <div class="release-detail p-3">
                            <div class="row detail-bandname">
                                <h2 class="text-uppercase fw-bold"><?= $merch->title; ?></h4>
                            </div>
                            <div class="row detail-typetalent">
                                <p class="col-4">Price</p>
                                <p class="col-1">:</p>
                                <p class="col-6"><?= $merch->price; ?></p>
                            </div>
                            <div class="row">
                                <p class="col-4">Desc</p>
                                <p class="col-1">:</p>
                                <div class="col-lg-6 detail-desc">
                                    <?= $merch->desc; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <hr>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-sm btn-edit m-1" href="/admin/merch/<?= $merch->slug; ?>/edit">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </a>
                            <a class="btn btn-sm btn-delete m-1" onclick="return confirm('Are you sure to delete ?')" href="/admin/merch/delete/<?= $merch->slug; ?>">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </a>
                        </div>
                        <p>
                            <small>Updated : <?= $merch->updated_at->diffForHumans(); ?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection