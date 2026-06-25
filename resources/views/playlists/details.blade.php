@extends('layouts.app')
@section('title', 'Sunday Morning Worship')

@section('content')
<body>
<main style="padding-top:42px">
<section class="page-header" style="margin-top:0;padding-bottom:4rem">
  <div class="container">
    <div class="row g-4 align-items-end">
      <div class="col-md-4"><div class="cover-art shadow"><i class="bi bi-music-note-list"></i></div></div>
      <div class="col-md-8">
        <span class="tag">Playlist</span>
        <h1 class="serif display-4 mt-2">Sunday Morning Worship</h1>
        <p class="lead opacity-75">The perfect songs to start your Sunday in praise.</p>
        <p class="opacity-50 small">Curated by UCC Music · 32 songs · 2h 18m · 89k followers</p>
        <button class="btn btn-light btn-lg me-2"><i class="bi bi-play-fill"></i> Play</button>
        <button class="btn btn-outline-light btn-lg"><i class="bi bi-heart"></i> Follow</button>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="table-responsive"><table class="table align-middle">
      <thead><tr><th>#</th><th>Title</th><th>Artist</th><th>Album</th><th>Duration</th></tr></thead>
      <tbody><tr><td class="text-muted">1</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Amazing Grace (Reimagined)</a></td><td class="text-muted">Bethany Hayes</td><td class="text-muted">Songs of the Sanctuary</td><td class="text-muted">4:21</td></tr><tr><td class="text-muted">2</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">How Great Thou Art</a></td><td class="text-muted">David Whitman</td><td class="text-muted">Higher Ground</td><td class="text-muted">5:02</td></tr><tr><td class="text-muted">3</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Holy Spirit Move</a></td><td class="text-muted">Grace Carter</td><td class="text-muted">Grace Unending</td><td class="text-muted">3:48</td></tr><tr><td class="text-muted">4</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Old Rugged Cross</a></td><td class="text-muted">The Hallelujah Quartet</td><td class="text-muted">Hymns Reimagined</td><td class="text-muted">4:15</td></tr><tr><td class="text-muted">5</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sanctuary</a></td><td class="text-muted">Mercy Choir</td><td class="text-muted">Voices of Mercy</td><td class="text-muted">6:10</td></tr><tr><td class="text-muted">6</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sweet Hour of Prayer</a></td><td class="text-muted">Isaiah Brooks</td><td class="text-muted">Old Rugged Cross</td><td class="text-muted">3:55</td></tr><tr><td class="text-muted">7</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Light of the World</a></td><td class="text-muted">Lily Monroe</td><td class="text-muted">Light of Dawn</td><td class="text-muted">4:33</td></tr><tr><td class="text-muted">8</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">I Surrender All</a></td><td class="text-muted">Restoration Band</td><td class="text-muted">Restored</td><td class="text-muted">5:18</td></tr><tr><td class="text-muted">9</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Blessed Assurance</a></td><td class="text-muted">Bethany Hayes</td><td class="text-muted">Songs of the Sanctuary</td><td class="text-muted">3:42</td></tr><tr><td class="text-muted">10</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Goodness of God</a></td><td class="text-muted">Grace Carter</td><td class="text-muted">Higher Ground</td><td class="text-muted">4:55</td></tr><tr><td class="text-muted">11</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Amazing Grace (Reimagined)</a></td><td class="text-muted">Bethany Hayes</td><td class="text-muted">Grace Unending</td><td class="text-muted">4:21</td></tr><tr><td class="text-muted">12</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">How Great Thou Art</a></td><td class="text-muted">David Whitman</td><td class="text-muted">Hymns Reimagined</td><td class="text-muted">5:02</td></tr><tr><td class="text-muted">13</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Holy Spirit Move</a></td><td class="text-muted">Grace Carter</td><td class="text-muted">Voices of Mercy</td><td class="text-muted">3:48</td></tr><tr><td class="text-muted">14</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Old Rugged Cross</a></td><td class="text-muted">The Hallelujah Quartet</td><td class="text-muted">Old Rugged Cross</td><td class="text-muted">4:15</td></tr><tr><td class="text-muted">15</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sanctuary</a></td><td class="text-muted">Mercy Choir</td><td class="text-muted">Light of Dawn</td><td class="text-muted">6:10</td></tr><tr><td class="text-muted">16</td><td><a href="details.blade.php" class="text-decoration-none text-dark fw-semibold">Sweet Hour of Prayer</a></td><td class="text-muted">Isaiah Brooks</td><td class="text-muted">Restored</td><td class="text-muted">3:55</td></tr></tbody>
    </table></div>
  </div>
</section>
</main>
@endsection
