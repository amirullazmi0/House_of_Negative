@extends('user.template')

@section('content')

<div class="user">
    <div class="card">
        <div class="card card-head">

        </div>

        <div class="sub-release">
            <div class="d-flex me-auto">
                <h3 class="sub1 me-2">ALL</h3>
                <h3 class="sub2">RELEASE</h3>
            </div>
            <div class="garis"></div>
        </div>
        <div class="release">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        @foreach($release as $release)
                        <div class="row mb-4">
                            <div class="col-lg-4 text-center">
                                @if($release->talent_photo)
                                <img class="img-fluid w-100 img-release" src="<?= asset('storage/' . $release->talent_photo); ?>" alt="">
                                @else
                                <img class="img-fluid img-release" src="/img/default.jpg" alt="">
                                @endif
                            </div>
                            <div class="col-lg-8">
                                <a class="text-decoration-none text-talent" href="/release/<?= $release->slug; ?>">
                                    <h3 class="m-0 fw-bold m-1"><?= $release->talent_name; ?></h3>
                                </a>
                                <div class="text-excerpt">
                                    <p class="">
                                        <?= $release->excerpt; ?>
                                        <small><a class="text-decoration-none" href="/release/<?= $release->slug; ?>">more</a></small>
                                    </p>
                                </div>
                                <a class="fa-brands fa-soundcloud icon me-2" href=""></a>
                                <a class="fa-brands fa-spotify icon me-2" href=""></a>
                                <a class="fa-brands fa-instagram icon me-2" href=""></a>
                            </div>
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