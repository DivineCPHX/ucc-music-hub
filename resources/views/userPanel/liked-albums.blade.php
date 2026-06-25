<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Liked Albums | UCC Music Hub</title>
<meta name="description" content="User Liked Albums">
<meta property="og:title" content="Liked Albums | UCC Music Hub">
<meta property="og:description" content="User Liked Albums">
<meta property="og:type" content="website">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-ucc fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"><i class="bi bi-music-note-beamed text-ucc-gold me-2"></i>UCC Music Hub</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon" style="filter:invert(1)"></span></button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
<li class="nav-item"><a class="nav-link " href="/">Home</a></li>
<li class="nav-item"><a class="nav-link " href="/artists">Artists</a></li>
<li class="nav-item"><a class="nav-link " href="/albums">Albums</a></li>
<li class="nav-item"><a class="nav-link " href="/songs">Songs</a></li>
<li class="nav-item"><a class="nav-link " href="/playlists">Playlists</a></li>
<li class="nav-item"><a class="nav-link " href="/events">Events</a></li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown">Shop</a><ul class="dropdown-menu"><li><a class="dropdown-item" href="/shop/merchandise">Merchandise</a></li><li><a class="dropdown-item" href="/shop/music-sheets">Music Sheets &amp; MIDI</a></li></ul></li>
<li class="nav-item"><a class="nav-link " href="/gallery">Gallery</a></li>
<li class="nav-item"><a class="nav-link " href="/blog">Blog</a></li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown">More</a><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="/about">About</a></li><li><a class="dropdown-item" href="/testimonials">Testimonials</a></li><li><a class="dropdown-item" href="/subscriptions">Subscriptions</a></li><li><a class="dropdown-item" href="/faq">FAQ</a></li><li><a class="dropdown-item" href="/contact">Contact</a></li></ul></li>
<li class="nav-item ms-lg-2"><a class="nav-link d-flex align-items-center " href="profile.blade.php" title="My Profile"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80" alt="Profile" style="width:32px;height:32px;border-radius:50%;object-fit:cover;border:2px solid var(--ucc-gold)"></a></li>
<li class="nav-item ms-lg-2"><a class="btn btn-outline-ucc btn-sm" href="/login">Sign In</a></li>
<li class="nav-item ms-lg-2"><a class="btn btn-ucc btn-sm" href="/register">Join Free</a></li>
</ul>
    </div>
  </div>
</nav><main style="padding-top:70px;background:#f7f5f1;min-height:100vh"><div class="container-fluid"><div class="row"><aside class="col-lg-3 dashboard-side">
  <div class="px-3 mb-3 d-flex align-items-center gap-3">
    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200" class="rounded-circle" style="width:48px;height:48px;object-fit:cover" alt="">
    <div><div class="fw-semibold small">Sarah Mitchell</div><small class="text-muted">Premium Member</small></div>
  </div>
  <nav>
  <a href="dashboard.blade.php" class=""><i class="bi bi-speedometer2"></i> Dashboard</a><a href="profile.blade.php" class=""><i class="bi bi-person"></i> Profile</a><a href="my-/playlists" class=""><i class="bi bi-music-note-list"></i> My Playlists</a><a href="favorite-/songs" class=""><i class="bi bi-heart"></i> Favorite Songs</a><a href="liked-/albums" class="active"><i class="bi bi-disc"></i> Liked Albums</a><a href="comments.blade.php" class=""><i class="bi bi-chat"></i> Comments</a><a href="billing-history.blade.php" class=""><i class="bi bi-credit-card"></i> Billing</a><a href="notifications.blade.php" class=""><i class="bi bi-bell"></i> Notifications</a><a href="settings.blade.php" class=""><i class="bi bi-gear"></i> Settings</a>
  </nav>
</aside><div class="col-lg-9 p-4 p-md-5"><h2 class="serif mb-4">Liked Albums</h2><div class="row g-4"><div class="col-sm-6 col-md-4 col-lg-3">
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
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1485579149621-3123dd979885?w=600" alt="Voices of Mercy"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Voices of Mercy</h6>
      <small class="text-muted">Mercy Choir · 2025</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?w=600" alt="Old Rugged Cross"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Old Rugged Cross</h6>
      <small class="text-muted">Isaiah Brooks · 2024</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=600" alt="Light of Dawn"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Light of Dawn</h6>
      <small class="text-muted">Lily Monroe · 2025</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1446057032654-9d8885db76c6?w=600" alt="Restored"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Restored</h6>
      <small class="text-muted">Restoration Band · 2024</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
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
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1485579149621-3123dd979885?w=600" alt="Voices of Mercy"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Voices of Mercy</h6>
      <small class="text-muted">Mercy Choir · 2025</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?w=600" alt="Old Rugged Cross"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Old Rugged Cross</h6>
      <small class="text-muted">Isaiah Brooks · 2024</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=600" alt="Light of Dawn"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Light of Dawn</h6>
      <small class="text-muted">Lily Monroe · 2025</small>
    </div>
  </div>
</div><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card card-music h-100">
    <div class="cover"><img src="https://images.unsplash.com/photo-1446057032654-9d8885db76c6?w=600" alt="Restored"><span class="play"><i class="bi bi-play-fill"></i></span></div>
    <div class="card-body">
      <h6 class="mb-1 serif">Restored</h6>
      <small class="text-muted">Restoration Band · 2024</small>
    </div>
  </div>
</div></div></div></div></div></main>
@include('blade.footer')
  <script src="{{ asset('js/foot.js') }}"></script>


<script src="js/main.js"></script>
</body></html>
