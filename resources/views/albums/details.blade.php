@extends('layouts.app')

@section('title', $album->name)

@section('content')
<section class="page-header" style="margin-top:0;padding-bottom:4rem">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-4"><img src="{{ Storage::url($album->photo) }}" class="img-fluid rounded-4 shadow" style="width:80%;height:80%;" alt="{{ $album->name }}r"></div>
      <div class="col-md-8">
        <span class="tag">Album · 2025</span>
        <h1 class="serif mt-2">{{ $album->name }}</h1>
        <p class="lead">by <a href="{{ route('artists.details', $artist) }}" class="text-ucc-gold fw-semibold text-decoration-none">{{ $album->artist->name }}</a></p>
        <p class="opacity-75">12 tracks** · 48 min** · {{ $album->artist->genre->name }} · Released {{ $album->release_month }} {{ $album->release_year }}</p>
        <p>{{ $album->description }}</p>
            <div class="dropdown d-inline-block">
                <button class="btn btn-ucc btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-play-fill"></i> Play Album
                </button>
                <ul class="dropdown-menu dropdown-menu-ucc">
                    @foreach($album->albumLinks as $albumLink)
                        <li>
                            <a class="dropdown-item" href="{{ $albumLink->url }}">
                                <i class="bi bi-music-note me-2">**</i>{{ $albumLink->name }}
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
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Duration</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($album->songs as $index => $song)
                <tr>
                    <td class="text-muted">{{ $index + 1 }}</td>
                    <td>
                        <a href="{{ route('songs.details', $song) }}" class="text-decoration-none text-dark fw-semibold">
                            {{ $song->title }}
                        </a>
                    </td>
                    <td>{{ $song->formatted_duration }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <div class="d-flex justify-content-center gap-3 px-1 py-1">
                                        <a href="{{ route('songs.details', $song) }}" class="text-dark" title="Play">
                                            <i class="bi bi-play-fill"></i>
                                        </a>
                                        <a href="{{ route('artists.details', $song->artist) }}" class="text-dark" title="Go to Artist">
                                            <i class="bi bi-person"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
