@extends('layouts.app')

@section('title', $artist->name)

@section('content')
<body>
<main style="padding-top:42px">
<header class="page-header" style="margin-top:0">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-3 text-center"><div class="artist-circle" style="width:200px;height:200px"><img src="{{ Storage::url($artist->artist_photo) }}" alt="{{ $artist->name }}"></div></div>
      <div class="col-md-9 text-center text-md-start mt-4 mt-md-0">
        <span class="tag">Verified Artist</span>
        <h1 class="serif mt-2">{{ $artist->name }}</h1>
        <p class="opacity-75 mb-3">{{ $artist->genre->name }} · {{ $artist->artist_listeners }}</p>
        <button class="btn btn-ucc me-2"><i class="bi bi-play-fill"></i> Play</button>
        <button class="btn btn-outline-ucc"><i class="bi bi-heart"></i> Follow</button>
      </div>
    </div>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-8">
        <h3 class="serif">Biography</h3>
        <p>{{ $artist->name }} {{ $artist->bio}}.</p>

        <h3 class="serif mt-5">Popular Songs</h3>
        <div class="list-group">
            @foreach($artist->songs as $index => $song)
            <div class="list-group-item d-flex align-items-center">
                <span class="text-muted me-3">{{ $index + 1 }}</span>
                <div class="flex-grow-1">
                    <div class="fw-semibold">{{ $song->title }}</div>
                    <small class="text-muted">{{ $song->genre->name }}</small>
                </div>
                <small class="text-muted me-3">{{ $song->formatted_duration }}</small>
                <a href="{{ route('songs.details', $song) }}" class="btn btn-sm btn-ucc rounded-circle">
                    <i class="bi bi-play-fill"></i>
                </a>
            </div>
            @endforeach
        </div>

        <h3 class="serif mt-5">Albums</h3>
<div class="row g-4">
@foreach ($artist->albums as $album)
    <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-music h-100">
        <div class="cover">
            <img src="{{ Storage::url($album->photo) }}" alt="Songs of the Sanctuary">
        </div>
        <div class="card-body">
            <a href="{{ route('albums.details', $album->id) }} target="_blank" class="text-decoration-none text-reset">
            <h6 class="mb-1 serif">{{ $album->name }}</h6>
            </a>
            <small class="text-muted">{{ $album->artist->name }} · {{ $album->release_year }}</small>
        </div>
    </div>
    </div>
@endforeach
</div>
      </div>

      <div class="col-lg-4">
        <div class="card border-0 bg-ucc-cream p-4">
          <h6 class="text-uppercase text-ucc-primary fw-bold small">Connect</h6>
          <div class="d-flex gap-3 fs-4 mt-2">
            @foreach ($artist->artistLinks as $artistLink)
            <a href="{{ $artistLink->url }}" target="_blank" class="text-ucc-primary"><i class="{{ $artistLink->icon }}"></i></a>
            @endforeach
          </div>
          <hr>
          <p class="small mb-1"><strong>Genre:</strong> {{ $artist->genre->name }}</p>
          <p class="small mb-1"><strong>From:</strong> {{ $artist->artist_location }}</p>
          <p class="small mb-1"><strong>Label:</strong> {{ $artist->artist_label }}</p>
          <p class="small mb-0"><strong>Active since:</strong> {{ $artist->active_since }}</p>
        </div>
      </div>

    </div>
  </div>
</section>
</main>
@endsection
