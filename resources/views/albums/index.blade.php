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
<div class="row g-4 mb-5">
    @foreach ($albums->where('is_featured', true) as $album)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card card-music h-100">
                <div class="cover">
                    <img src="{{ Storage::url($album->photo) }}" alt="{{ $album->name }}"><span class="play"><a href="{{ route('albums.details', $album) }}" style="color:inherit;text-decoration:none"><i class="bi bi-play-fill"></i></a></span>
                </div>
                <div class="card-body">
                <a href="{{ route('albums.details', $album) }}" class="text-decoration-none text-reset"><h6 class="mb-1 serif">{{ $album->name }}</h6></a>
                <small class="text-muted">{{ $album->artist->name }} · {{ $album->release_year }}</small>

                    <div class="d-flex gap-2 mt-2">
                        @foreach ($album->albumLinks as $albumLink)
                        <a href="{{ $albumLink->url }}" target="_blank" rel="noopener" class="{{ $albumLink->class_indicator }}" title="{{ $albumLink->name }}" style="font-size:.7rem"><i class="{{ $albumLink->icon }}"></i>{{ $albumLink->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <h4 class="serif mb-4">All Albums</h4>
    <div class="row g-4">
@foreach ($albums as $album)
<div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
        <div class="cover">
            <img src="{{ Storage::url($album->photo) }}" alt="{{ $album->name }}"><span class="play"><a href="{{ route('albums.details', $album) }}" style="color:inherit;text-decoration:none"><i class="bi bi-play-fill"></i></a></span>
        </div>
        <div class="card-body">
            <a href="{{ route('albums.details', $album) }}" class="text-decoration-none text-reset"><h6 class="mb-1 serif">{{ $album->name }}</h6></a>
            <small class="text-muted">{{ $album->artist->name }} · {{ $album->release_year }}</small>
                <div class="d-flex gap-2 mt-2">
                    @foreach ($album->albumLinks as $albumLink)
                    <a href="{{ $albumLink->url }}" target="_blank" rel="noopener" class="{{ $albumLink->class_indicator }}" title="{{ $albumLink->name }}" style="font-size:.7rem"><i class="{{ $albumLink->icon }}"></i>{{$albumLink->name}}</a>
                    @endforeach
                </div>
        </div>
  </div>
</div>
@endforeach
    </div>
  </div>
</div>
</section>
</main>
@endsection
