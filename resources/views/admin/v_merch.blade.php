@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="event">
        <div class="pop mb-3 shadow-sm border">
            <h1 class="text-center">DAFT MERCH</h1>
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
                        <a class="btn btn-wow mt-3 mb-3" href="/admin/merch/create">Add Merch</a>
                        @if ($merch->count())
                        <div class="table-responsive text-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-uppercase fw-bold">
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Merch</th>
                                        <th scope="col">Price (Rp)</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($merch as $merch)
                                    <tr class="merch-table">
                                        <td scope="row"><?= $nomor++; ?></td>
                                        <td>
                                            <a class="text-decoration-none text-black fw-bold" href="/admin/merch/<?= $merch->slug; ?>">
                                                <?= $merch->title; ?>
                                            </a>
                                        </td>
                                        <td class="">
                                            <img class="img-fluid merch-photo" src="<?= asset('storage/' . $merch->photo); ?>" alt="">
                                        </td>
                                        <td><?= $merch->price; ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-sm btn-detail m-1" href="/admin/merch/<?= $merch->slug; ?>">
                                                    <span class="material-symbols-outlined">
                                                        sticky_note_2
                                                    </span>
                                                </a>
                                                <a class="btn btn-sm btn-edit m-1" href="/admin/merch/<?= $merch->slug; ?>/edit">
                                                    <span class="material-symbols-outlined">
                                                        edit
                                                    </span>
                                                </a>
                                                <a class="btn btn-sm btn-delete m-1" onclick="return confirm('Are you sure to delete ?')" href="/admin/merch/delete/<?= $merch->slug; ?>">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <h3 class="text-center mt-5 mb-5">DATA NOT FOUND</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection