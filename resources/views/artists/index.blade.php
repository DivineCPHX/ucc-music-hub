@extends('layouts.app')

@section('title', 'Artists')

@section('content')
<body>
<main style="padding-top:42px">
<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Christian Music</p>
    <h1 class="serif">Browse Artists</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Artists</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <form method="GET" action="{{ route('artists.index') }}">
      <div class="row g-3 align-items-center mb-5">
        <div class="col-md-6"><div class="input-group input-group-lg"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input name="search" class="form-control" placeholder="Search artists..." value="{{ request('search') }}"></div></div>
        <div class="col-md-3">
        <select name="genre" class="form-select form-select-lg" onchange="this.form.submit()">
          <option value="">All Genres</option>
          @foreach ($genres as $genre)
            <option value="{{ $genre->id }}" {{ request('genre') == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
          @endforeach
        </select></div>
        <div class="col-md-3"><select name="sort" class="form-select form-select-lg">
          <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>Sort: Popular</option>
          <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
          <option value="az" {{ request('sort') == 'az' ? 'selected' : '' }}>A-Z</option>
          <option value="za" {{ request('sort') == 'za' ? 'selected' : '' }}>Z-A</option>
        </select></div>
      </div>
    </form>
    <div class="row g-5">
      @foreach ($artists as $artist)
          <div class="col-6 col-md-4 col-lg-3 text-center">
              <a href="{{ route('artists.details', $artist) }}" class="text-decoration-none text-reset">
                  <div class="artist-circle mb-3">
                      <img src="{{ Storage::url($artist->artist_photo) }}" alt="{{ $artist->name }}">
                  </div>
                  <h6 class="serif mb-1">{{ $artist->name }}</h6>
                  <small class="text-muted">{{ $artist->genre->name }}</small>
              </a>
          </div>
      @endforeach
    {{-- </div> --}}
    {{-- <div class="row g-3 align-items-center mb-5">
      <div class="col-md-6"><div class="input-group input-group-lg"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input class="form-control" placeholder="Search artists..."></div></div>
      <div class="col-md-3"><select class="form-select form-select-lg"><option>All Genres</option><option>Worship</option><option>Gospel</option><option>Hymns</option><option>Contemporary</option></select></div>
      <div class="col-md-3"><select class="form-select form-select-lg"><option>Sort: Popular</option><option>Newest</option><option>A-Z</option></select></div>
    </div> --}}
  {{-- <div class="row g-5">
    @foreach ($artists as $artist)
        <div class="col-6 col-md-4 col-lg-3 text-center">
            <a href="{{ route('artists.details', $artist) }}" class="text-decoration-none text-reset">
                <div class="artist-circle mb-3">
                    <img src="{{ Storage::url($artist->artist_photo) }}" alt="{{ $artist->name }}">
                </div>
                <h6 class="serif mb-1">{{ $artist->name }}</h6>
                <small class="text-muted">{{ $artist->genre->name }}</small>
            </a>
        </div>
    @endforeach --}}
    <nav class="mt-5 d-flex justify-content-center"><ul class="pagination"><li class="page-item disabled"><a class="page-link">‹</a></li><li class="page-item active"><a class="page-link">1</a></li><li class="page-item"><a class="page-link">2</a></li><li class="page-item"><a class="page-link">3</a></li><li class="page-item"><a class="page-link">›</a></li></ul></nav>
  </div>
</section>
</main>
@endsection
