@extends('layouts.app')

@section('title', 'Songs')

@section('content')
<main style="padding-top:42px">
<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Library</p>
    <h1 class="serif">Songs</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Songs</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="row g-3 mb-4">
      <div class="col-md-8">
        <div class="input-group input-group-lg">
            <span class="input-group-text bg-white">
                <i class="bi bi-search"></i>
            </span>
            <input class="form-control" placeholder="Search songs, artists, lyrics...">
        </div>
      </div>
      <div class="col-md-4">
        <select class="form-select form-select-lg">
            <option>Sort: Trending</option><option>Newest</option><option>A-Z</option>
        </select>
      </div>
    </div>
    <div class="mb-5">
        <button class="btn btn-sm btn-ucc me-2 mb-2">All</button>
        <button class="btn btn-sm btn-outline-secondary me-2 mb-2">Worship</button>
        <button class="btn btn-sm btn-outline-secondary me-2 mb-2">Gospel</button>
        <button class="btn btn-sm btn-outline-secondary me-2 mb-2">Hymns</button>
        <button class="btn btn-sm btn-outline-secondary me-2 mb-2">Contemporary</button>
        <button class="btn btn-sm btn-outline-secondary me-2 mb-2">Choral</button>
        <button class="btn btn-sm btn-outline-secondary me-2 mb-2">Southern Gospel</button>
        <button class="btn btn-sm btn-outline-secondary me-2 mb-2">Acoustic</button>
    </div>

    <h4 class="serif mb-3">Featured Songs</h4>
    <div class="row g-3 mb-5">
        @foreach($songs->where('is_featured', true) as $song)
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center gap-3">
                <div class="cover-art" style="width:80px;height:80px">
                    <i class="bi bi-music-note"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0 serif">{{ $song->title }}</h6>
                    <small class="text-muted">{{ $song->artist->name }} · {{ $song->genre->name }}</small>
                </div>
                <div class="dropdown">
                    <button class="btn btn-ucc rounded-circle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-play-fill"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @foreach($song->songLinks as $songLink)
                        <li>
                            <a class="dropdown-item" href="{{ $songLink->url }}" target="_blank"><i class="{{ $songLink->icon }}"></i>{{ $songLink->name }}</a>
                        </li>
                        {{-- <li>
                            <a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a>
                        </li> --}}
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

        {{-- <div class="col-md-6">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center gap-3">
                <div class="cover-art" style="width:80px;height:80px">
                    <i class="bi bi-music-note"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0 serif">How Great Thou Art</h6>
                    <small class="text-muted">David Whitman · Hymns</small>
                </div>
                <div class="dropdown">
                    <button class="btn btn-ucc rounded-circle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-play-fill"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center gap-3">
                <div class="cover-art" style="width:80px;height:80px"><i class="bi bi-music-note"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0 serif">Holy Spirit Move</h6>
                    <small class="text-muted">Grace Carter · Contemporary</small>
                </div>
                <div class="dropdown">
                    <button class="btn btn-ucc rounded-circle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center gap-3">
                <div class="cover-art" style="width:80px;height:80px"><i class="bi bi-music-note"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0 serif">Old Rugged Cross</h6>
                    <small class="text-muted">The Hallelujah Quartet · Southern Gospel</small>
                </div>
                <div class="dropdown">
                    <button class="btn btn-ucc rounded-circle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-play-fill"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>

    <h4 class="serif mb-3">All Songs</h4>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-muted">1</td>
                    <td>
                        <a href="/songs/details" class="text-decoration-none text-dark fw-semibold">Amazing Grace (Reimagined)</a>
                    </td>
                    <td class="text-muted">Bethany Hayes</td>
                    <td>
                        <span class="tag">Worship</span>
                    </td>
                    <td class="text-muted">4:21</td>
                    <td>
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-play-fill"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a>
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-sm btn-light">
                            <i class="bi bi-heart"></i>
                        </button>
                    </td>
                </tr>

                {{-- <tr>
                    <td class="text-muted">2</td>
                    <td>
                        <a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">How Great Thou Art</a>
                    </td>
                    <td class="text-muted">David Whitman</td>
                    <td>
                        <span class="tag">Hymns</span>
                    </td>
                    <td class="text-muted">5:02</td>
                    <td>
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-play-fill"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a>
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-sm btn-light">
                            <i class="bi bi-heart"></i>
                        </button>
                    </td>
                </tr> --}}

                {{-- <tr> --}}
                    {{-- <td class="text-muted">3</td> --}}
                    {{-- <td> --}}
                        {{-- <a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Holy Spirit Move</a></td><td class="text-muted">Grace Carter</td><td><span class="tag">Contemporary</span></td><td class="text-muted">3:48</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">4</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Old Rugged Cross</a></td><td class="text-muted">The Hallelujah Quartet</td><td><span class="tag">Southern Gospel</span></td><td class="text-muted">4:15</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">5</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sanctuary</a></td><td class="text-muted">Mercy Choir</td><td><span class="tag">Choral</span></td><td class="text-muted">6:10</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">6</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sweet Hour of Prayer</a></td><td class="text-muted">Isaiah Brooks</td><td><span class="tag">Hymns</span></td><td class="text-muted">3:55</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">7</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Light of the World</a></td><td class="text-muted">Lily Monroe</td><td><span class="tag">Worship</span></td><td class="text-muted">4:33</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">8</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">I Surrender All</a></td><td class="text-muted">Restoration Band</td><td><span class="tag">Contemporary</span></td><td class="text-muted">5:18</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">9</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Blessed Assurance</a></td><td class="text-muted">Bethany Hayes</td><td><span class="tag">Hymns</span></td><td class="text-muted">3:42</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">10</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Goodness of God</a></td><td class="text-muted">Grace Carter</td><td><span class="tag">Worship</span></td><td class="text-muted">4:55</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">11</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Amazing Grace (Reimagined)</a></td><td class="text-muted">Bethany Hayes</td><td><span class="tag">Worship</span></td><td class="text-muted">4:21</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">12</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">How Great Thou Art</a></td><td class="text-muted">David Whitman</td><td><span class="tag">Hymns</span></td><td class="text-muted">5:02</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">13</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Holy Spirit Move</a></td><td class="text-muted">Grace Carter</td><td><span class="tag">Contemporary</span></td><td class="text-muted">3:48</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">14</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Old Rugged Cross</a></td><td class="text-muted">The Hallelujah Quartet</td><td><span class="tag">Southern Gospel</span></td><td class="text-muted">4:15</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">15</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sanctuary</a></td><td class="text-muted">Mercy Choir</td><td><span class="tag">Choral</span></td><td class="text-muted">6:10</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">16</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sweet Hour of Prayer</a></td><td class="text-muted">Isaiah Brooks</td><td><span class="tag">Hymns</span></td><td class="text-muted">3:55</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">17</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Light of the World</a></td><td class="text-muted">Lily Monroe</td><td><span class="tag">Worship</span></td><td class="text-muted">4:33</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">18</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">I Surrender All</a></td><td class="text-muted">Restoration Band</td><td><span class="tag">Contemporary</span></td><td class="text-muted">5:18</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">19</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Blessed Assurance</a></td><td class="text-muted">Bethany Hayes</td><td><span class="tag">Hymns</span></td><td class="text-muted">3:42</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr><tr><td class="text-muted">20</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Goodness of God</a></td><td class="text-muted">Grace Carter</td><td><span class="tag">Worship</span></td><td class="text-muted">4:55</td><td><div class="dropdown d-inline-block"><button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-play-fill"></i></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="https://music.youtube.com" target="_blank"><i class="bi bi-youtube text-danger me-2"></i>YouTube Music</a></li><li><a class="dropdown-item" href="https://open.spotify.com" target="_blank"><i class="bi bi-spotify text-success me-2"></i>Spotify</a></li><li><a class="dropdown-item" href="https://audiomack.com" target="_blank"><i class="bi bi-music-note-list text-warning me-2"></i>Audiomack</a></li></ul></div> <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button></td></tr> --}}
            </tbody>
        </table>
    </div>
  </div>
</section>
</main>
@endsection
