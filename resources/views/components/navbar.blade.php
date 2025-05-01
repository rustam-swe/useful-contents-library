<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">Content Hub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contents*') ? 'active' : '' }}" href="/contents">Contents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('authors*') ? 'active' : '' }}" href="/authors">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('genres*') ? 'active' : '' }}" href="/genres">Genres</a>
                </li>
            </ul>
        </div>
    </div>
</nav>