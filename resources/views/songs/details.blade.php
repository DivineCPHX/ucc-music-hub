@extends('layouts.app')

@section('title', 'Song Details')

@section('content')
<body>
<main style="padding-top:42px">
<section class="page-header" style="margin-top:0;padding-bottom:4rem">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-md-4"><img src="{{ Storage::url($song->song_photo) }}" class="img-fluid rounded-4 shadow" style="width:80%;height:80%;" alt="{{ $song->title }}"></div>
      <div class="col-md-8">
        <span class="tag">Song</span>
        <h1 class="serif mt-2">{{ $song->title }}</h1>
        <p class="lead opacity-75">{{ $song->artist->name }} · <a href="details.blade.php" class="text-ucc-gold text-decoration-none">{{ $song->album->name }}</a> · 2025</p>
        <div class="dropdown song-links-dropdown">
            <button class="btn p-0 border-0 bg-transparent dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    title="Click for streaming links">
                <div class="visualizer visualizer-lg">
                    <span></span><span></span><span></span><span></span>
                    <span></span><span></span><span></span><span></span>
                    <span></span><span></span><span></span><span></span>
                </div>
            </button>
            <small class="d-block song-links-hint">Click for links</small>

            <ul class="dropdown-menu">
                @foreach($song->songLinks as $songLink)
                <li>
                    <a class="dropdown-item" href="{{ $songLink->url }}" target="_blank">
                        <i class="{{ $songLink->icon }}"></i> {{ $songLink->name }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-8">
        <h3 class="serif">Lyrics</h3>
        <div class="lyrics-block">
            {{ $song->plain_lyrics }}
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0 bg-ucc-cream p-4">
          <h6 class="text-uppercase text-ucc-primary fw-bold small">Song Info</h6>
          <p class="small mb-1"><strong>Album:</strong> {{ $song->album->name }}</p>
          <p class="small mb-1"><strong>Released:</strong> {{ $song->release_month }}, {{ $song->release_year }}</p>
          <p class="small mb-1"><strong>Genre:</strong> {{ $song->genre->name }}</p>
          <p class="small mb-1"><strong>Key:</strong> {{ $song->song_key }}</p>
          <p class="small mb-0"><strong>BPM:</strong> {{ $song->song_bpm }}</p>
        </div>
      </div>
    </div>
    <h3 class="serif mt-5 mb-4">You May Also Like</h3>
    <div class="row g-4">
    <div class="col-sm-6 col-md-4 col-lg-3">
        @foreach($relatedSongs as $relatedSong)
        <div class="card card-music h-100">
            <div class="cover">
                <img src="{{ Storage::url($relatedSong->song_photo) }}" alt="{{ $relatedSong->title }}"><span class="play"><i class="bi bi-play-fill"></i></span>
            </div>
            <div class="card-body">
                <h6 class="mb-1 serif">{{ $relatedSong->title }}</h6>
                <small class="text-muted">{{ $relatedSong->artist->name }} · {{ $relatedSong->release_year }}</small>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card card-music h-100">
            <div class="cover"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Higher Ground"><span class="play"><i class="bi bi-play-fill"></i></span></div>
            <div class="card-body">
            <h6 class="mb-1 serif">Higher Ground</h6>
            <small class="text-muted">David Whitman · 2025</small>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card card-music h-100">
            <div class="cover">
                <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600" alt="Grace Unending"><span class="play"><i class="bi bi-play-fill"></i></span>
            </div>
            <div class="card-body">
            <h6 class="mb-1 serif">Grace Unending</h6>
            <small class="text-muted">Grace Carter · 2024</small>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card card-music h-100">
            <div class="cover">
                <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600" alt="Hymns Reimagined"><span class="play"><i class="bi bi-play-fill"></i></span>
            </div>
            <div class="card-body">
            <h6 class="mb-1 serif">Hymns Reimagined</h6>
            <small class="text-muted">The Hallelujah Quartet · 2024</small>
            </div>
        </div>
    </div> --}}
</div>
  </div>
</section>
</main>
@endsection
