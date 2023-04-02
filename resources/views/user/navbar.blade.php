<nav class="navbar navbar-expand-lg navbar-user navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-logo me-5" href="/">
            <img class="img-fluid logo m-1" src="/img/hon-logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item me-2">
                    <a class="nav-link nav-icon <?= ($active === "home") ? 'active' : ''; ?>" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link nav-icon <?= ($active === "release") ? 'active' : ''; ?>" href="/release">Releases</a>
                    < /li>
                <li class="nav-item me-2">
                    <a class="nav-link nav-icon <?= ($active === "event") ? 'active' : ''; ?>" href="/event">Events</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link nav-icon <?= ($active === "news") ? 'active' : ''; ?>" href="/news">News</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link nav-icon <?= ($active === "merch") ? 'active' : ''; ?>" href="/merch">Merch</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item me-3">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="search" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon2">
                                <span class="material-symbols-outlined">
                                    search
                                </span>
                            </button>
                        </div>
                    </form>
                </li>
                <div class="space d-block d-sm-none">
                    <div class="mt-3"></div>
                </div>
                <div class="d-flex justify-content-start">
                    <!-- <li class="nav-item">
                    <a class="nav-link p-2" nav-icon href="">
                            <span class="material-symbols-sharp mb-0">
                                favorite
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-icon p-2" href="">
                            <span class="material-symbols-sharp">
                                shopping_cart
                            </span>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link nav-icon p-2" href="">
                            <span class="material-symbols-sharp">
                                account_circle
                            </span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>