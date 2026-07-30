@extends('layouts.app')
@section('title', 'Playlists')

@section('content')
<main style="padding-top:42px">

<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Curated</p>
    <h1 class="serif">Playlists</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Playlists</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="input-group input-group-lg mb-5"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input class="form-control" placeholder="Search playlists..."></div>
    <h4 class="serif mb-4">Featured</h4>
    <div class="row g-4 mb-5">
        @foreach ($playlists->where('is_featured', true) as $playlist)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="{{ route('playlists.details', $playlist) }}" class="text-decoration-none text-reset">
                <div class="card card-music h-100">
                    <div class="cover-art">
                        @if($playlist->playlist_photo)
                            <img src="{{ Storage::url($playlist->playlist_photo) }}" alt="{{ $playlist->title }}">
                        @else
                            <i class="bi bi-music-note-list"></i>
                        @endif
                    </div>
                    <div class="card-body">
                        <h6 class="serif">{{ $playlist->title }}</h6>
                        <small class="text-muted">{{ $playlist->songs_count }} songs · {{ $playlist->playlist_creator }}</small>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
  </div>
</section>
</main>
@endsection
