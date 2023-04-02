@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="event">
        <div class="pop mb-3 shadow-sm border">
            <h1 class="text-center">DAFT EVENT</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-sm border">
                    <div class="card-body">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session('success'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <a class="btn btn-wow mt-3 mb-3" href="/admin/event/create">Add Event</a>
                        <div class="row">
                            @if ($event->count())
                            @foreach($event as $event)
                            <div class="col-lg-4">
                                <div class="card shadow-sm border mb-4">
                                    <div class="text-center">
                                        <div class="text-center">
                                            @if($event->poster)
                                            <img class="img-fluid img-event" src="<?= asset('storage/' . $event->poster); ?>" alt="">
                                            @else
                                            <img class="img-fluid img-event" src="/img/default.jpg" alt="">
                                            @endif
                                            <h4 class="text-uppercase mt-2 mb-0 fw-bold"><?= $event->title; ?></h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-sm btn-detail m-1" href="/admin/event/<?= $event->slug; ?>">
                                                <span class="material-symbols-outlined">
                                                    sticky_note_2
                                                </span>
                                            </a>
                                            <a class="btn btn-sm btn-edit m-1" href="/admin/event/<?= $event->slug; ?>/edit">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </a>
                                            <a class="btn btn-sm btn-delete m-1" onclick="return confirm('Are you sure to delete ?')" href="/admin/event/delete/<?= $event->slug; ?>">
                                                <span class="material-symbols-outlined">
                                                    delete
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h3 class="text-center mt-5 mb-5">DATA NOT FOUND</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection