@extends('user.template')

@section('content')

<div class="user">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <img class="img-fluid detail-img" src="<?= asset('storage/' . $release->artwork); ?>" alt="">
                <h4 class="detail-name mt-2"><?= $release->talent_name; ?></h4>
                <h4 class="detail-title"><?= $release->title; ?></h4>
                <div class="detail-desc">
                    <?= $release->desc; ?>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a class="fa-brands fa-soundcloud detail-icon me-2" href=""></a>
                        <a class="fa-brands fa-spotify detail-icon me-2" href=""></a>
                        <a class="fa-brands fa-instagram detail-icon me-2" target="_blank" href="https://www.instagram.com/<?= $release->instagram; ?>/"></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="detail-talent-photo mb-4">
                            <img class="img-fluid w-100" src="<?= asset('storage/' . $release->talent_photo); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <p class="">Release Date :<small class=""><?= $date; ?></small></p>
                </div>

                <div class="sub-detail">
                    <div class="d-flex me-auto">
                        <h3 class="sub1 me-2">OTHER</h3>
                        <h3 class="sub2">RELEASE</h3>
                    </div>
                    <div class="garis"></div>
                </div>

                @foreach($allrelease as $allrelease)
                <div class="row mb-4">
                    <div class="col-lg-4 text-center">
                        @if($release->talent_photo)
                        <img class="img-fluid w-100 img-release" src="<?= asset('storage/' . $allrelease->talent_photo); ?>" alt="">
                        @else
                        <img class="img-fluid img-release" src="/img/default.jpg" alt="">
                        @endif
                    </div>
                    <div class="col-lg-8">
                        <a class="text-decoration-none text-talent" href="/release/<?= $allrelease->slug; ?>">
                            <h3 class="m-0 fw-bold m-1"><?= $allrelease->talent_name; ?></h3>
                        </a>
                        <div class="text-excerpt">
                            <p class="">
                                <?= $allrelease->excerpt; ?>
                                <small><a class="text-decoration-none" href="">more</a></small>
                            </p>
                        </div>
                        <a class="fa-brands fa-soundcloud icon me-2" href=""></a>
                        <a class="fa-brands fa-spotify icon me-2" href=""></a>
                        <a class="fa-brands fa-instagram icon me-2" href="https://www.instagram.com/<?= $allrelease->instagram; ?>/"></a>
                    </div>
                </div>
                @endforeach

                <h3 class="text-start mt-5 mb-5">
                    <a class="more-release" href="/release">More Release...</a>
                </h3>
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
@endsection