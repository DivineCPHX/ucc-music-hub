@extends('layouts.app')

@section('title', 'Album Details')

@section('content')
<section class="page-header" style="margin-top:0;padding-bottom:4rem">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-4"><img src="{{ Storage::url($album->photo) }}" class="img-fluid rounded-4 shadow" style="width:80%;height:80%;" alt="{{ $album->name }}r"></div>
      <div class="col-md-8">
        <span class="tag">Album · 2025</span>
        <h1 class="serif mt-2">{{ $album->name }}</h1>
        <p class="lead">by <a href="{{ route('artists.details', $artist) }}" class="text-ucc-gold fw-semibold text-decoration-none">{{ $album->artist->name }}</a></p>
        <p class="opacity-75">12 tracks · 48 min · {{ $album->artist->genre->name }} · Released {{ $album->release_month }} {{ $album->release_year }}</p>
        <p>{{ $album->description }}</p>
            <div class="dropdown d-inline-block">
                <button class="btn btn-ucc btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-play-fill"></i> Play Album
                </button>
                <ul class="dropdown-menu dropdown-menu-ucc">
                    @foreach($album->albumLinks as $albumLink)
                        <li>
                            <a class="dropdown-item" href="{{ $albumLink->url }}">
                                <i class="bi bi-music-note me-2"></i>{{ $albumLink->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        <button class="btn btn-outline-ucc btn-lg"><i class="bi bi-heart"></i> Save</button>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <h3 class="serif mb-4">Track Listing</h3>
    <div class="table-responsive"><table class="table align-middle">
      <thead><tr><th>#</th><th>Title</th><th>Plays</th><th>Duration</th><th></th></tr></thead>
      <tbody>
      <tr><td class="text-muted">1</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Amazing Grace (Reimagined)</a></td><td class="text-muted">120k</td><td>4:21</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">2</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">How Great Thou Art</a></td><td class="text-muted">113k</td><td>5:02</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">3</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Holy Spirit Move</a></td><td class="text-muted">106k</td><td>3:48</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">4</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Old Rugged Cross</a></td><td class="text-muted">99k</td><td>4:15</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">5</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sanctuary</a></td><td class="text-muted">92k</td><td>6:10</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">6</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sweet Hour of Prayer</a></td><td class="text-muted">85k</td><td>3:55</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">7</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Light of the World</a></td><td class="text-muted">78k</td><td>4:33</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">8</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">I Surrender All</a></td><td class="text-muted">71k</td><td>5:18</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">9</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Blessed Assurance</a></td><td class="text-muted">64k</td><td>3:42</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">10</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Goodness of God</a></td><td class="text-muted">57k</td><td>4:55</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr>
      </tbody></table></div>
            <h3 class="serif mt-5 mb-4">More from {{ $album->artist->name }}</h3>
            <div class="row g-4">
        @foreach ($artist->albums->where('id', '!=', $album->id) as $album)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-music h-100">
                        <div class="cover">
                            <img src="{{ Storage::url($album->photo) }}" alt="{{ $album->name }}"><span class="play"><i class="bi bi-play-fill"></i></span>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('albums.details', $album->id) }}" class="text-decoration-none text-reset">
                                <h6 class="mb-1 serif">{{ $album->name }}</h6>
                            </a>
                            <small class="text-muted">{{ $album->artist->name }} · {{ $album->release_year }}</small>
                        </div>
                    </div>
                </div>
        @endforeach
            </div>
  </div>
</section>
@endsection
