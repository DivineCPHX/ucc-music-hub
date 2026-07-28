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
                <a href="{{ route('songs.details', $song) }}">
                <div class="cover-art">
                    @if($song->song_photo)
                        <img src="{{ Storage::url($song->song_photo) }}" alt="{{ $song->name }}">
                    @else
                        <i class="bi bi-music-note"></i>
                    @endif
                </div>
                </a>
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
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
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
                @foreach ($songs as $song)
                <tr>
                    <td class="text-muted">{{ $song->id }}</td>
                    <td>
                        <a href="{{ route('songs.details', $song) }}" class="text-decoration-none text-dark fw-semibold">{{ $song->title }}</a>
                    </td>
                    <td class="text-muted">{{ $song->artist->name }}</td>
                    <td>
                        <span class="tag">{{ $song->genre->name }}</span>
                    </td>
                    <td class="text-muted">{{ $song->formatted_duration }}</td>
                    <td>
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-play-fill"></i>
                            </button>
                            <ul class="dropdown-menu">
                                @foreach ($song->songLinks as $songLink)
                                <li>
                                    <a class="dropdown-item" href="{{ $songLink->url }}" target="_blank"><i class="{{ $songLink->icon }}"></i>{{ $songLink->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <button class="btn btn-sm btn-light">
                            <i class="bi bi-heart"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
  </div>
</section>
</main>
@endsection
