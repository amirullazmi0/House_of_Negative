@extends('user.template')

@section('content')

<div class="user">
    <div class="card">
        <div class="card card-head">

        </div>
        <div class="release">
            <div class="row">
                <div class="col-9">
                    <div class="col-lg-12 mb-3">
                        <img class="img-fluid w-100" src="<?= asset('storage/' . $news->photo); ?>" alt="">
                    </div>
                    <div class="text-excert">
                        <h3 class="text-center text-uppercase"><?= $news->title; ?></h3>
                        <div class="text-excerpt">
                            <p><?= $news->desc; ?></p>
                        </div>
                    </div>
                    <div class="sub-release">
                        <div class="d-flex me-auto">
                            <h3 class="sub1 me-2">OTHER</h3>
                            <h3 class="sub2">NEWS</h3>
                        </div>
                        <div class="garis"></div>
                    </div>
                    <div class="row">
                        @foreach ($newnews as $newnews)
                        <div class="col-6 mb-3">
                            <a href="/news/<?= $newnews->slug; ?>">
                                <img class="img-fluid" src="<?= asset('storage/' . $newnews->photo); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-6 mb-3">
                            <a class="text-decoration-none text-black" href="">
                                <h5 class="text-uppercase"><?= $newnews->title; ?></h5>
                            </a>
                            <div class="text-excerpt">
                                <p><?= $newnews->excerpt; ?></p>
                            </div>
                            <a class="text-decoration-none" href="">more</a>
                        </div>
                        @endforeach
                        <a class="more-release mb-3" href="/news">All News</a>
                    </div>
                    <div class="garis mb-4"></div>
                    <div class="row mb-4">
                        @foreach ($merch as $merch)
                        <div class="col-6 mb-3">
                            <img class="img-fluid img-merch w-100" src="<?= asset('storage/' . $merch->photo); ?>" alt="">
                        </div>
                        @endforeach
                    </div>
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