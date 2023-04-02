<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>


<body>
    <div class="release">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 ">
                    <div class="card shadow-sm border">
                        <div class="card-body">
                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <img class="img-fluid mx-auto d-block mb-4" src="/img/hon-logo.jpg" alt="" style="max-height: 100px;">
                            <h5 class="text-center mb-5 text-white">LOGIN ADMIN</h5>
                            <form action="/login" method="POST">
                                @csrf
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                        <span class="material-symbols-outlined">
                                            mail
                                        </span>
                                    </span>
                                    <input type="email" id="email" name="email" id="inputPassword6" class="form-control @error('email')is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                </div>

                                <div class="input-group input-group-sm mt-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                        <span class="material-symbols-outlined">
                                            lock
                                        </span>
                                    </span>
                                    <input type="password" id="password" name="password" class="form-control @error('password')is-invalid @enderror" aria-describedby="passwordHelpInline" placeholder="Password" required>
                                </div>
                                <button class="btn btn-delete d-block col-6 mx-auto mt-5" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>