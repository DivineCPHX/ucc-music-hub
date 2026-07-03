@extends('layouts.app')

@section('title', 'Albums')

@section('content')
<body>
<main style="padding-top:42px">
<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Latest & Greatest</p>
    <h1 class="serif">Albums</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Albums</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="row g-3 mb-5">
      <div class="col-md-6"><div class="input-group input-group-lg"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input class="form-control" placeholder="Search albums..."></div></div>
      <div class="col-md-3"><select class="form-select form-select-lg"><option>Genre: All</option><option>Worship</option><option>Hymns</option></select></div>
      <div class="col-md-3"><select class="form-select form-select-lg"><option>Year: All</option><option>2025</option><option>2024</option></select></div>
    </div>
    <h4 class="serif mb-4">Featured Albums</h4>
    <div class="row g-4 mb-5"><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="{{ Storage::url($albums->photo) }}" alt="Songs of the Sanctuary"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Songs of the Sanctuary</h6>
      <small class="text-muted">Bethany Hayes · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Higher Ground"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Higher Ground</h6>
      <small class="text-muted">David Whitman · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600" alt="Grace Unending"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Grace Unending</h6>
      <small class="text-muted">Grace Carter · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600" alt="Hymns Reimagined"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Hymns Reimagined</h6>
      <small class="text-muted">The Hallelujah Quartet · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div></div>
    <h4 class="serif mb-4">All Albums</h4>
    <div class="row g-4"><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600" alt="Songs of the Sanctuary"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Songs of the Sanctuary</h6>
      <small class="text-muted">Bethany Hayes · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Higher Ground"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Higher Ground</h6>
      <small class="text-muted">David Whitman · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600" alt="Grace Unending"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Grace Unending</h6>
      <small class="text-muted">Grace Carter · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600" alt="Hymns Reimagined"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Hymns Reimagined</h6>
      <small class="text-muted">The Hallelujah Quartet · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1485579149621-3123dd979885?w=600" alt="Voices of Mercy"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Voices of Mercy</h6>
      <small class="text-muted">Mercy Choir · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?w=600" alt="Old Rugged Cross"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Old Rugged Cross</h6>
      <small class="text-muted">Isaiah Brooks · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=600" alt="Light of Dawn"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Light of Dawn</h6>
      <small class="text-muted">Lily Monroe · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1446057032654-9d8885db76c6?w=600" alt="Restored"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Restored</h6>
      <small class="text-muted">Restoration Band · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600" alt="Songs of the Sanctuary"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Songs of the Sanctuary</h6>
      <small class="text-muted">Bethany Hayes · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Higher Ground"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Higher Ground</h6>
      <small class="text-muted">David Whitman · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600" alt="Grace Unending"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Grace Unending</h6>
      <small class="text-muted">Grace Carter · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600" alt="Hymns Reimagined"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Hymns Reimagined</h6>
      <small class="text-muted">The Hallelujah Quartet · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1485579149621-3123dd979885?w=600" alt="Voices of Mercy"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Voices of Mercy</h6>
      <small class="text-muted">Mercy Choir · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?w=600" alt="Old Rugged Cross"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Old Rugged Cross</h6>
      <small class="text-muted">Isaiah Brooks · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=600" alt="Light of Dawn"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Light of Dawn</h6>
      <small class="text-muted">Lily Monroe · 2025</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1446057032654-9d8885db76c6?w=600" alt="Restored"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Restored</h6>
      <small class="text-muted">Restoration Band · 2024</small>
      <div class="d-flex gap-2 mt-2">
        <a href="https://music.youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger px-2 py-1" title="YouTube Music" style="font-size:.7rem"><i class="bi bi-youtube"></i> YT Music</a>
        <a href="https://open.spotify.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success px-2 py-1" title="Spotify" style="font-size:.7rem"><i class="bi bi-spotify"></i> Spotify</a>
        <a href="https://audiomack.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-warning px-2 py-1" title="Audiomack" style="font-size:.7rem"><i class="bi bi-music-note-list"></i> Audiomack</a>
      </div>
    </div>
  </div>
</div></div>
  </div>
</section>
</main>
@endsection
