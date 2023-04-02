@extends('user.template')

@section('content')

<div class="user">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <img class="img-fluid w-100" src="<?= asset('storage/' . $event->poster); ?>" alt="">
                    </div>
                </div>
                <h3 class="text-center mt-4 text-uppercase fw-bold">Soundrenaline</h3>

                <div class="detail-desc">
                    <?= $event->desc; ?>
                </div>
                <div class="row mt-4">
                    <div class="col-3">
                        <p>Date</p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-8">
                        <p><?= $date; ?></p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-3">
                        <p>Venue</p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-8">
                        <p><?= $event->venue; ?></p>
                    </div>
                </div>

                <div class="sub-detail">
                    <div class="d-flex me-auto">
                        <h3 class="sub1 me-2">ALL</h3>
                        <h3 class="sub2">EVENTS</h3>
                    </div>
                    <div class="garis"></div>
                </div>

                <div class="row">
                    @foreach ($allevent as $allevent)
                    <div class="col-4">
                        <a href="/event/<?= $allevent->slug; ?>">
                            <div class="con-event ">
                                <img src="<?= asset('storage/' . $allevent->poster); ?>" alt="Avatar" class="image img-fluid mb-4">
                                <div class="overlay"><?= $allevent->title; ?></div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <h3 class="text-start mb-4">
                    <a class="more-release" href="/event">More Events...</a>
                </h3>
                <div class="garis mb-4"></div>
            </div>
        </div>
        <div class="col-3">
            @foreach($release as $release)
            <a href="/release/<?= $release->slug; ?>">
                <img class="img-fluid w-100 mb-2" src="<?= asset('storage/' . $release->talent_photo); ?>" alt="">
            </a>
            @endforeach
        </div>
    </div>
</div>


@endsection