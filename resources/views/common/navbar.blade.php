<nav class="navbar is-primary  has-text-white" >
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <strong>Bird<i class="fa-solid fa-dove"></i>potter</strong>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('home') }}"
                   class="navbar-item {{ Request::route()->getName() === 'home' ? "is-active" : "" }}">
                    Home
                </a>
                <a href="{{ route('posts.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'posts.index' ? "is-active" : "" }}">
                    News
                </a>
                <a href="{{ route('observations.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'observations.index' ? "is-active" : "" }}">
                    Observations
                </a>
                <a href="{{ route('locations.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'locations.index' ? "is-active" : "" }}">
                    Locations
                </a>
            </div>
        </div>
    </div>
</nav>


