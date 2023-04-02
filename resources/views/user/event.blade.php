@extends('user.template')

@section('content')

<div class="user">
    <div class="card">
        <div class="row">
            <div class="col-12">
                <div class="sub-detail">
                    <div class="d-flex me-auto">
                        <h3 class="sub1 me-2">ALL</h3>
                        <h3 class="sub2">EVENTS</h3>
                    </div>
                    <div class="garis"></div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    @foreach ($event as $event)
                    <div class="col-4">
                        <a href="/event/<?= $event->slug; ?>">
                            <div class="con-event ">
                                <img src="<?= asset('storage/' . $event->poster); ?>" alt="Avatar" class="image img-fluid mb-4">
                                <div class="overlay"><?= $event->title; ?></div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-3">
                @foreach ($release as $release)
                <a href="/release/<?= $release->slug; ?>">
                    <img class="img-fluid w-100 mb-2" src="<?= asset('storage/' . $release->talent_photo); ?>" alt="">
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection