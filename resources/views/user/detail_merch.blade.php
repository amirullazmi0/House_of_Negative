@extends('user.template')

@section('content')

<div class="user">
    <div class="card">
        <div class="card card-head">

        </div>
        <div class="release">
            <div class="row">
                <div class="col-9">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 mb-3">
                            <img class="img-fluid img-merch" src="<?= asset('storage/' . $merch->photo); ?>" alt="">
                        </div>
                        <div class="col-lg-12">
                            <div class="text-excert">
                                <h3 class="text-center"><?= $merch->title; ?></h3>
                                <p><?= $merch->desc; ?></p>
                                <div class="row">
                                    <div class="col-3">Price</div>
                                    <div class="col-1">:</div>
                                    <div class="col-6 text-center">
                                        <p class="text-price">
                                            <?= $merch->price; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-release">
                        <div class="d-flex me-auto">
                            <h3 class="sub1 me-2">OTHER</h3>
                            <h3 class="sub2">MERCH</h3>
                        </div>
                        <div class="garis"></div>
                    </div>
                    <div class="row">
                        @foreach ($newmerch as $newmerch)
                        <div class="col-6 mb-3">
                            <a href="/merch/<?= $newmerch->slug; ?>">
                                <img class="img-fluid img-merch" src="<?= asset('storage/' . $newmerch->photo); ?>" alt="">
                            </a>
                        </div>
                        @endforeach
                        <a class="more-release mb-3" href="/merch">All Merch</a>
                    </div>
                    <div class="garis mb-4"></div>
                    @foreach ($news as $news)
                    <div class="row mb-4">
                        <div class="col-lg-6 text-center">
                            @if($news->photo)
                            <img class="img-fluid w-100 img-release" src="<?= asset('storage/' . $news->photo); ?>" alt="">
                            @else
                            <img class="img-fluid img-release" src="/img/default.jpg" alt="">
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <a class="text-decoration-none text-talent" href="">
                                <h3 class="m-0 fw-bold m-1"><?= $news->title; ?></h3>
                            </a>
                            <div class="text-excerpt">
                                <p class="">
                                    <?= $news->excerpt; ?>
                                    <small><a class="text-decoration-none" href="">more</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-3">
                    @foreach($event as $event)
                    <a href="/event/<?= $event->slug; ?>">
                        <img class="img-fluid mb-3" src="<?= asset('storage/' . $event->poster); ?>" alt="">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection