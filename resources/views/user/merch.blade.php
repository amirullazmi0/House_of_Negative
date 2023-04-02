@extends('user.template')

@section('content')

<div class="user">
    <div class="card">
        <div class="card card-head">

        </div>

        <div class="sub-release">
            <div class="d-flex me-auto">
                <h3 class="sub1 me-2">ALL</h3>
                <h3 class="sub2">MERCH</h3>
            </div>
            <div class="garis"></div>
        </div>
        <div class="release">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="row">
                            @foreach ($merch as $merch)
                            <div class="col-6 mb-3">
                                <a href="/merch/<?= $merch->slug; ?>">
                                    <img class="img-fluid img-merch" src="<?= asset('storage/' . $merch->photo); ?>" alt="">
                                </a>
                            </div>
                            @endforeach
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