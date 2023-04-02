@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="release">
        <div class="pop mb-3 border shadow-sm ">
            <h1 class="text-center">DAFT ALL RELEASE</h1>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-lg-12">
                <div class="card shadow-sm border">
                    <div class="card-body">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session('success'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <a class="btn btn-wow mt-3 mb-3" href="/admin/release/create">Add Release</a>
                        <div class="row justify-content-end">
                            <div class="col-md-6">
                                <form action="/admin/release">
                                    <div class="input-group mb-3">
                                        <div class="input-group">
                                            @if(request('category'))
                                            <input type="hidden" name="category" value="{{ $request('category') }}">
                                            @endif
                                            <input type="text" name="keyword" class="form-control" placeholder="Search Talent or Title" value="{{ request('keyword') }}">
                                            <button class="btn btn-delete" type="post">
                                                <span class="material-symbols-outlined">
                                                    search
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- TABEL -->
                        @if ($release->count())
                        <div class="table-responsive text-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-uppercase fw-bold">
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($release as $release)
                                    <tr class="merch-table">
                                        <td scope="row"><?= $nomor++; ?></td>
                                        <td>
                                            <a class="text-decoration-none text-black fw-bold" href="/admin/release/<?= $release->slug; ?>">
                                                <?= $release->title; ?>
                                            </a>
                                        </td>
                                        <td class="">
                                            <img class="img-fluid merch-photo" src="<?= asset('storage/' . $release->talent_photo); ?>" alt="">
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-sm btn-detail m-1" href="/admin/release/<?= $release->slug; ?>">
                                                    <span class="material-symbols-outlined">
                                                        sticky_note_2
                                                    </span>
                                                </a>
                                                <a class="btn btn-sm btn-edit m-1" href="/admin/release/<?= $release->slug; ?>/edit">
                                                    <span class="material-symbols-outlined">
                                                        edit
                                                    </span>
                                                </a>
                                                <a class="btn btn-sm btn-delete m-1" onclick="return confirm('Are you sure to delete ?')" href="/admin/release/delete/<?= $release->slug; ?>">
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
</div>
@endsection