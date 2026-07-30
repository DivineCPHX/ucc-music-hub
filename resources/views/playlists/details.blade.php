@extends('layouts.app')
@section('title', $playlist->title)

@section('content')
<main style="padding-top:42px">
<section class="page-header" style="margin-top:0;padding-bottom:4rem">
  <div class="container">
    <div class="row g-4 align-items-end">
      <div class="col-md-4">
        <div class="cover-art shadow">
            @if($playlist->playlist_photo)
                <img src="{{ Storage::url($playlist->playlist_photo) }}" alt="{{ $playlist->title }}">
            @else
                <i class="bi bi-music-note-list"></i>
            @endif
        </div>
      </div>
      <div class="col-md-8">
        <span class="tag">Playlist</span>
        <h1 class="serif display-4 mt-2">{{ $playlist->title }}</h1>
        <p class="lead opacity-75">{{ $playlist->description }}</p>
        <p class="opacity-50 small">Curated by {{ $playlist->playlist_creator }} · {{ $playlist->songs->count() }} songs · {{ $playlist->formatted_duration }} · {{ $playlist->playlist_followers }}</p>
        <div class="dropdown">
            <button class="btn btn-light btn-lg me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-play-fill"></i> Play
            </button>
            <ul class="dropdown-menu">
                @foreach($playlist->playlistLinks as $playlistLink)
                <li>
                    <a class="dropdown-item" href="{{ $playlistLink->url }}" target="_blank">
                        <i class="{{ $playlistLink->icon }} me-2"></i>{{ $playlistLink->name }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        {{-- <button class="btn btn-outline-light btn-lg"><i class="bi bi-heart"></i> Follow</button> --}}
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="table-responsive"><table class="table align-middle">
      <thead><tr><th>#</th><th>Title</th><th>Artist</th><th>Album</th><th>Duration</th></tr></thead>
      <tbody>
    @foreach($playlist->songs as $song)
        <tr>
            <td class="text-muted">{{ $song->id }}</td>
            <td>
                <a href="{{ route('songs.details', $song) }}" class="text-decoration-none text-dark fw-semibold">
                    {{ $song->title }}
                </a>
            </td>
            <td class="text-muted">{{ $song->artist->name }}</td>
            <td class="text-muted">{{ $song->album->name ?? '—' }}</td>
            <td class="text-muted">{{ $song->formatted_duration }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
  </div>
</section>
</main>
@endsection
