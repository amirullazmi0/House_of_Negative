<nav class="navbar navbar-expand-lg navbar-dark bg-black nav-admin mb-5 fixed-top">
    <div class="container">
        <a class="navbar-logo" href="/admin">
            <img class="img-fluid logo" src="/img/hon-logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-uppercase <?= ($active === "home") ? 'active' : ''; ?> " aria-current="page" href="/admin">home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= ($active === "release") ? 'active' : ''; ?>" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">RELEASE</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item mb-1 <?= ($dd_menu === "all") ? 'active' : ''; ?>" href="/admin/release">All Release</a></li>
                        <li><a class="dropdown-item <?= ($dd_menu === "category") ? 'active' : ''; ?>" href="/admin/category">Category</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase <?= ($active === "event") ? 'active' : ''; ?>" href="/admin/event">event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase <?= ($active === "merch") ? 'active' : ''; ?>" href="/admin/merch">Merch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase <?= ($active === "news") ? 'active' : ''; ?>" href="/admin/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase <?= ($active === "about") ? 'active' : ''; ?>" href="/admin/about">ABOUT</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item mb-1">
                                    <span class="material-symbols-outlined">
                                        Logout
                                    </span>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>