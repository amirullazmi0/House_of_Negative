<?php

use App\Models\News;
?>
@extends('user.template')

@section('content')

<div class="user">
    <div class="card">
        <div class="card card-head">

        </div>

        <div class="sub-release">
            <div class="d-flex me-auto">
                <h3 class="sub1 me-2">ALL</h3>
                <h3 class="sub2">NEWS</h3>
            </div>
            <div class="garis"></div>
        </div>
        <div class="release">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="row">
                            @foreach ($news as $news)
                            <div class="col-lg-6 mb-3">
                                <a href="/news/<?= $news->slug; ?>">
                                    <img class="img-fluid   " src="<?= asset('storage/' . $news->photo); ?>" alt="">
                                </a>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <a class="text-decoration-none text-black" href="/news/<?= $news->slug; ?>">
                                    <h5 class="text-uppercase"><?= $news->title; ?></h5>
                                </a>
                                <div class="text-excerpt">
                                    <p><?= $news->excerpt; ?></p>
                                </div>
                                <a class="text-decoration-none" href="">more</a>
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