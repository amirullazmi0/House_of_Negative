@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="about">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="pop mb-3 border shadow-sm">
                    <h1 class="text-center">MA PROFILE</h1>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card border shadow-sm mb-5">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label" for="title">Name</label>
                                    <input class="form-control form-control-sm" type="text" name="title" id="title" autofocus required>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label" for="title">Username</label>
                                    <input class="form-control form-control-sm" type="text" name="title" id="title" autofocus>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label" for="title">Email</label>
                                    <input class="form-control form-control-sm" type="text" name="title" id="title" autofocus>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label" for="title">New Password</label>
                                    <input class="form-control form-control-sm" type="password" name="title" id="title" autofocus>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label" for="title">Confirm Password</label>
                                    <input class="form-control form-control-sm" type="password" name="title" id="title" autofocus>
                                </div>
                                <hr class="mt-3">
                                <div class="d-grid gap-2 col-4 p-3 mx-auto">
                                    <button class="btn btn-detail btn-sm fw-bold text-uppercase p-2" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection