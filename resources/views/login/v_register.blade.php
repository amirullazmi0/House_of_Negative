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
                <div class="col-lg-6 ">
                    <div class="card shadow-sm border mb-5">
                        <div class="card-body">
                            <img class="img-fluid mx-auto d-block mb-4" src="/img/hon-logo.jpg" alt="" style="max-height: 100px;">
                            <h5 class="text-center mb-3">FORM REGISTER</h5>
                            <form action="/asdlkj" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row align-items-center mb-3">
                                    <div class="col-3">
                                        <label for="inputPassword6" class="col-form-label">Name</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="name" name="name" id="inputPassword6" class="form-control @error('name')is-invalid @enderror" value="{{ old('name') }}">
                                        @error('name')
                                        <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-3">
                                        <label for="inputPassword6" class="col-form-label">Username</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="username" id="username" name="username" id="inputPassword6" class="form-control @error('username')is-invalid @enderror" value="{{ old('username') }}">
                                        @error('username')
                                        <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-3">
                                        <label for="inputPassword6" class="col-form-label">Password</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="password" id="password" name="password" class="form-control @error('password')is-invalid @enderror" aria-describedby="passwordHelpInline">
                                        <span id="passwordHelpInline" class="form-text text-black">
                                            Must be 8-20 characters long.
                                        </span>
                                        @error('password')
                                        <br>
                                        <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-3">
                                        <label for="inputPassword6" class="col-form-label">Email</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="email" name="email" id="email" class="form-control @error('email')is-invalid @enderror" aria-describedby="passwordHelpInline" value="{{ old('email') }}">
                                        @error('email')
                                        <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <button class="btn btn-delete d-block col-6 mx-auto" type="submit">Submit</button>
                                <hr>
                                <p class="text-center">
                                    Sudah punya akun ? <a class="text-decoration-none" href="/login">Login</a>
                                </p>
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