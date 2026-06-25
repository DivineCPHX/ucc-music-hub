@extends('layouts.app')

@section('title', 'Song Details')

@section('content')
<body>
<main style="padding-top:42px">
<section class="page-header" style="margin-top:0;padding-bottom:4rem">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-md-4"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600" class="img-fluid rounded-4 shadow" alt=""></div>
      <div class="col-md-8">
        <span class="tag">Song</span>
        <h1 class="serif mt-2">Amazing Grace (Reimagined)</h1>
        <p class="lead opacity-75">Bethany Hayes · <a href="details.blade.php" class="text-ucc-gold text-decoration-none">Songs of the Sanctuary</a> · 2025</p>
        <div class="player mt-4">
          <div class="d-flex justify-content-between mb-2"><small>1:24</small><small>4:21</small></div>
          <div class="bar mb-3"><div class="fill"></div></div>
          <div class="d-flex justify-content-center align-items-center gap-3">
            <button class="btn btn-link text-white"><i class="bi bi-shuffle"></i></button>
            <button class="btn btn-link text-white fs-4"><i class="bi bi-skip-start-fill"></i></button>
            <button class="btn btn-light rounded-circle p-3"><i class="bi bi-play-fill fs-4"></i></button>
            <button class="btn btn-link text-white fs-4"><i class="bi bi-skip-end-fill"></i></button>
            <button class="btn btn-link text-white"><i class="bi bi-repeat"></i></button>
          </div>
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
        <div class="lyrics">Amazing grace, how sweet the sound
That saved a wretch like me
I once was lost, but now am found
Was blind, but now I see

'Twas grace that taught my heart to fear
And grace my fears relieved
How precious did that grace appear
The hour I first believed

Through many dangers, toils and snares
I have already come
'Tis grace hath brought me safe thus far
And grace will lead me home</div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0 bg-ucc-cream p-4">
          <h6 class="text-uppercase text-ucc-primary fw-bold small">Song Info</h6>
          <p class="small mb-1"><strong>Album:</strong> Songs of the Sanctuary</p>
          <p class="small mb-1"><strong>Released:</strong> March 2025</p>
          <p class="small mb-1"><strong>Genre:</strong> Worship</p>
          <p class="small mb-1"><strong>Key:</strong> G Major</p>
          <p class="small mb-0"><strong>BPM:</strong> 72</p>
        </div>
      </div>
    </div>
    <h3 class="serif mt-5 mb-4">You May Also Like</h3>
    <div class="row g-4"><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600" alt="Songs of the Sanctuary"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Songs of the Sanctuary</h6>
      <small class="text-muted">Bethany Hayes · 2025</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Higher Ground"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Higher Ground</h6>
      <small class="text-muted">David Whitman · 2025</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600" alt="Grace Unending"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Grace Unending</h6>
      <small class="text-muted">Grace Carter · 2024</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600" alt="Hymns Reimagined"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Hymns Reimagined</h6>
      <small class="text-muted">The Hallelujah Quartet · 2024</small>
    </div>
  </div>
</div></div>
  </div>
</section>
</main>
@endsection
