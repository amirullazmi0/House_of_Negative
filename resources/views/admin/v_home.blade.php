@extends('admin.v_template')

@section('content')
@auth
<div class="container">
    <div class="home">
        <div class="pop mb-3 border shadow-sm">
            <h1 class="text-uppercase">WELCOME {{ auth()->user()->username }} !!!</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <a href="/admin/release">
                    <div class="card shadow-sm border">
                        <div class="card-body">
                            <h2 class="text-center">RELEASE</h2>
                            <p style="background-color: rgb(189, 8, 8);color: white;border-color: transparent;border-radius: 50px;" class="text-center d-grid col-6 mx-auto p-3">
                                {{ $j_release }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/admin/event">
                    <div class="card shadow-sm border">
                        <div class="card-body">
                            <h2 class="text-center">EVENT</h2>
                            <p style="background-color: rgb(189, 8, 8);color: white;border-color: transparent;border-radius: 50px;" class="text-center d-grid col-6 mx-auto p-3">
                                {{ $j_event }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/admin/merch">
                    <div class="card shadow-sm border">
                        <div class="card-body">
                            <h2 class="text-center">MERCH</h2>
                            <p style="background-color: rgb(189, 8, 8);color: white;border-color: transparent;border-radius: 50px;" class="text-center d-grid col-6 mx-auto p-3">
                                {{ $j_merch }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/admin/news">
                    <div class="card shadow-sm border">
                        <div class="card-body">
                            <h2 class="text-center">NEWS</h2>
                            <p style="background-color: rgb(189, 8, 8);color: white;border-color: transparent;border-radius: 50px;" class="text-center d-grid col-6 mx-auto p-3">
                                {{ $j_news }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection