@extends('layouts.app')

@section('title', 'Bethany Hayes')

@section('content')
<body>
<main style="padding-top:42px">
<header class="page-header" style="margin-top:0">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-3 text-center"><div class="artist-circle" style="width:200px;height:200px"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600" alt="Bethany Hayes"></div></div>
      <div class="col-md-9 text-center text-md-start mt-4 mt-md-0">
        <span class="tag">Verified Artist</span>
        <h1 class="serif mt-2">Bethany Hayes</h1>
        <p class="opacity-75 mb-3">Worship · 1.2M monthly listeners</p>
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
        <p>Bethany Hayes is a Dove Award-winning worship leader whose music has touched congregations across six continents. Raised in a small church in Nashville, she discovered her gift for leading worship at age 14 and has since released six studio albums.</p>
        <p>Her ministry focuses on intimate, scripture-rooted songs that invite listeners into the presence of God. Bethany currently serves as a worship pastor at Grace Community Church.</p>

        <h3 class="serif mt-5">Popular Songs</h3>
        <div class="list-group">
        <div class="list-group-item d-flex align-items-center"><span class="text-muted me-3">1</span><div class="flex-grow-1"><div class="fw-semibold">Amazing Grace (Reimagined)</div><small class="text-muted">Worship</small></div><small class="text-muted me-3">4:21</small><button class="btn btn-sm btn-ucc rounded-circle"><i class="bi bi-play-fill"></i></button></div><div class="list-group-item d-flex align-items-center"><span class="text-muted me-3">2</span><div class="flex-grow-1"><div class="fw-semibold">How Great Thou Art</div><small class="text-muted">Hymns</small></div><small class="text-muted me-3">5:02</small><button class="btn btn-sm btn-ucc rounded-circle"><i class="bi bi-play-fill"></i></button></div><div class="list-group-item d-flex align-items-center"><span class="text-muted me-3">3</span><div class="flex-grow-1"><div class="fw-semibold">Holy Spirit Move</div><small class="text-muted">Contemporary</small></div><small class="text-muted me-3">3:48</small><button class="btn btn-sm btn-ucc rounded-circle"><i class="bi bi-play-fill"></i></button></div><div class="list-group-item d-flex align-items-center"><span class="text-muted me-3">4</span><div class="flex-grow-1"><div class="fw-semibold">Old Rugged Cross</div><small class="text-muted">Southern Gospel</small></div><small class="text-muted me-3">4:15</small><button class="btn btn-sm btn-ucc rounded-circle"><i class="bi bi-play-fill"></i></button></div><div class="list-group-item d-flex align-items-center"><span class="text-muted me-3">5</span><div class="flex-grow-1"><div class="fw-semibold">Sanctuary</div><small class="text-muted">Choral</small></div><small class="text-muted me-3">6:10</small><button class="btn btn-sm btn-ucc rounded-circle"><i class="bi bi-play-fill"></i></button></div>
        </div>

        <h3 class="serif mt-5">Albums</h3>
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
      <div class="col-lg-4">
        <div class="card border-0 bg-ucc-cream p-4">
          <h6 class="text-uppercase text-ucc-primary fw-bold small">Connect</h6>
          <div class="d-flex gap-3 fs-4 mt-2">
            <a href="#" class="text-ucc-primary"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-ucc-primary"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-ucc-primary"><i class="bi bi-youtube"></i></a>
            <a href="#" class="text-ucc-primary"><i class="bi bi-spotify"></i></a>
            <a href="#" class="text-ucc-primary"><i class="bi bi-globe"></i></a>
          </div>
          <hr>
          <p class="small mb-1"><strong>Genre:</strong> Worship</p>
          <p class="small mb-1"><strong>From:</strong> Nashville, TN</p>
          <p class="small mb-1"><strong>Label:</strong> Sanctuary Records</p>
          <p class="small mb-0"><strong>Active since:</strong> 2014</p>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
@endsection
