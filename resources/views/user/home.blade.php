@extends('user.template')

@section('content')
<div class="user">
    <div class="card">
        <div class="card card-head">
            <img class="img-fluid img-head" src="/img/123.gif" alt="">
            <!-- <div class="d-block title-head">
                <h3 class="">HOUSE OF NEGATIVE</h3>
            </div> -->
        </div>
        <div class="sub">
            <div class="d-flex me-auto">
                <h3 class="sub1 me-2">LATEST</h3>
                <h3 class="sub2">RELEASE</h3>
            </div>
            <div class="garis"></div>
        </div>
        <div class="release">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        @foreach($newrelease as $newrelease)
                        <div class="row mb-4">
                            <div class="col-lg-4 text-center">
                                @if($newrelease->talent_photo)
                                <img class="img-fluid w-100 img-release" src="<?= asset('storage/' . $newrelease->talent_photo); ?>" alt="">
                                @else
                                <img class="img-fluid img-release" src="/img/default.jpg" alt="">
                                @endif
                            </div>
                            <div class="col-lg-8">
                                <a class="text-decoration-none text-talent" href="/release/<?= $newrelease->slug; ?>">
                                    <h3 class="m-0 fw-bold m-1"><?= $newrelease->talent_name; ?></h3>
                                </a>
                                <div class="text-excerpt">
                                    <p class="">
                                        <?= $newrelease->excerpt; ?>
                                        <small><a class="text-decoration-none" href="/release/<?= $newrelease->slug; ?>">more</a></small>
                                    </p>
                                </div>
                                <a class="fa-brands fa-soundcloud icon me-2" href=""></a>
                                <a class="fa-brands fa-youtube icon me-2" href=""></a>
                                <a class="fa-brands fa-spotify icon me-2" href=""></a>
                                <a class="fa-brands fa-instagram icon me-2" href=""></a>
                            </div>
                        </div>
                        @endforeach

                        <a class="more-release" href="/release">All Release</a>

                        <!-- GARIS SUB MERCH -->
                        <div class="sub-merch">
                            <div class="d-flex justify-content-end">
                                <h3 class="sub1 me-2">HON</h3>
                                <h3 class="sub2">MERCH</h3>
                            </div>
                            <div class="garis"></div>
                        </div>

                        <!-- MERCH -->
                        <div class="row">
                            @foreach ($newmerch as $newmerch)
                            <div class="col-6 mb-3">
                                <img class="img-fluid img-merch w-100" src="<?= asset('storage/' . $newmerch->photo); ?>" alt="">
                            </div>
                            @endforeach
                            <a class="more-release text-end" href="/merch">All Merch</a>
                        </div>

                        <!-- GARIS -->
                        <div class="sub-release">
                            <div class="garis"></div>
                        </div>

                        <!-- NEWS -->
                        <div class="row">
                            @foreach($newnews as $newnews)
                            <div class="row mb-4">
                                <div class="col-lg-6 text-center">
                                    @if($newnews->photo)
                                    <img class="img-fluid w-100 img-release" src="<?= asset('storage/' . $newnews->photo); ?>" alt="">
                                    @else
                                    <img class="img-fluid img-release" src="/img/default.jpg" alt="">
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <a class="text-decoration-none text-talent" href="">
                                        <h3 class="m-0 fw-bold m-1"><?= $newnews->title; ?></h3>
                                    </a>
                                    <div class="text-excerpt">
                                        <p class="">
                                            <?= $newnews->excerpt; ?>
                                            <small><a class="text-decoration-none" href="">more</a></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <a class="more-release" href="/news">All News</a>
                        </div>
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