@extends('layouts.app')

@section('title', 'Songs of the Sanctuary')

<body>
@include('blade.nav')
<section class="page-header" style="margin-top:0;padding-bottom:4rem">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-4"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=800" class="img-fluid rounded-4 shadow" alt="Album cover"></div>
      <div class="col-md-8">
        <span class="tag">Album · 2025</span>
        <h1 class="serif mt-2">Songs of the Sanctuary</h1>
        <p class="lead">by <a href="details.blade.php" class="text-ucc-gold fw-semibold text-decoration-none">Bethany Hayes</a></p>
        <p class="opacity-75">12 tracks · 48 min · Worship · Released March 2025</p>
        <p>A live worship recording captured at Grace Community Church featuring intimate, scripture-rich songs designed for personal devotion and corporate praise.</p>
        <button class="btn btn-ucc btn-lg me-2"><i class="bi bi-play-fill"></i> Play Album</button>
        <button class="btn btn-outline-ucc btn-lg"><i class="bi bi-heart"></i> Save</button>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <h3 class="serif mb-4">Track Listing</h3>
    <div class="table-responsive"><table class="table align-middle">
      <thead><tr><th>#</th><th>Title</th><th>Plays</th><th>Duration</th><th></th></tr></thead>
      <tbody>
      <tr><td class="text-muted">1</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Amazing Grace (Reimagined)</a></td><td class="text-muted">120k</td><td>4:21</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">2</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">How Great Thou Art</a></td><td class="text-muted">113k</td><td>5:02</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">3</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Holy Spirit Move</a></td><td class="text-muted">106k</td><td>3:48</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">4</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Old Rugged Cross</a></td><td class="text-muted">99k</td><td>4:15</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">5</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sanctuary</a></td><td class="text-muted">92k</td><td>6:10</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">6</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sweet Hour of Prayer</a></td><td class="text-muted">85k</td><td>3:55</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">7</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Light of the World</a></td><td class="text-muted">78k</td><td>4:33</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">8</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">I Surrender All</a></td><td class="text-muted">71k</td><td>5:18</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">9</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Blessed Assurance</a></td><td class="text-muted">64k</td><td>3:42</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr><tr><td class="text-muted">10</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Goodness of God</a></td><td class="text-muted">57k</td><td>4:55</td><td><button class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></button></td></tr>
      </tbody></table></div>

    <h3 class="serif mt-5 mb-4">More from Bethany Hayes</h3>
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
@include('blade.footer')
  <script src="{{ asset('js/foot.js') }}"></script>


<script src="js/main.js"></script>
</body></html>
