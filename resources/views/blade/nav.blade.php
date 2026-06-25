<nav class="navbar navbar-expand-lg navbar-ucc fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"><i class="bi bi-music-note-beamed text-ucc-gold me-2"></i>UCC Music Hub</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon" style="filter:invert(1)"></span></button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        {{-- Route Nav Highlight- Blade --}}
<li class="nav-item">
    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
       href="{{ route('index') }}">
       Home
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->is('artists') ? 'active' : '' }}"
       href="{{ route('artists.index') }}">
       Artists
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->is('albums') ? 'active' : '' }}"
       href="{{ route('albums.index') }}">
       Albums
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->is('songs') ? 'active' : '' }}"
       href="{{ route('songs.index') }}">
       Songs
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->is('playlists') ? 'active' : '' }}"
       href="{{ route('playlists.index') }}">
       Playlists
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->is('events') ? 'active' : '' }}"
       href="{{ route('events.index') }}">
       Events
    </a>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle {{ request()->is('shop/*') ? 'active' : '' }}"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        Shop
    </a>

    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item" href="{{ route('shop.merchandise') }}">
                Merchandise
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('shop.music-sheets') }}">
                Music Sheets & MIDI
            </a>
        </li>
    </ul>
</li>
{{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown">Shop</a><ul class="dropdown-menu"><li><a class="dropdown-item" href="/shop/merchandise">Merchandise</a></li><li><a class="dropdown-item" href="/shop/music-sheets">Music Sheets &amp; MIDI</a></li></ul></li> --}}

</li><li class="nav-item">
    <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}"
       href="{{ route('gallery.index') }}">
       Gallery
    </a>
</li>
</li><li class="nav-item">
    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}"
       href="{{ route('blog.index') }}">
       Blog
    </a>
</li>
{{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown">More</a><ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="/about">About</a></li>
    <li><a class="dropdown-item" href="/testimonials">Testimonials</a></li>
    <li><a class="dropdown-item" href="/subscriptions">Subscriptions</a></li>
    <li><a class="dropdown-item" href="/faq">FAQ</a></li>
    <li><a class="dropdown-item" href="/contact">Contact</a></li></ul></li> --}}

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle {{ request()->is('more/*') ? 'active' : '' }}"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        More
    </a>

    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item" href="{{ route('more.about') }}">
                About
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('more.testimonials') }}">
                Testimonials
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('more.subscriptions') }}">
                Subscriptions
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('more.faq') }}">
                FAQ
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('more.contact') }}">
                Contact
            </a>
        </li>
    </ul>
</li>

<li class="nav-item ms-lg-2"><a class="nav-link d-flex align-items-center " href="/profile" title="My Profile"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80" alt="Profile" style="width:32px;height:32px;border-radius:50%;object-fit:cover;border:2px solid var(--ucc-gold)"></a></li>
<li class="nav-item ms-lg-2"><a class="btn btn-outline-ucc btn-sm" href="/login">Sign In</a></li>
<li class="nav-item ms-lg-2"><a class="btn btn-ucc btn-sm" href="/register">Join Free</a></li>
</ul>
    </div>
  </div>
</nav>
