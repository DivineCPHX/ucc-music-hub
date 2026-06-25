<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Dashboard | UCC Music Hub</title>
<meta name="description" content="User Dashboard">
<meta property="og:title" content="Dashboard | UCC Music Hub">
<meta property="og:description" content="User Dashboard">
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
  <a href="dashboard.blade.php" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a><a href="profile.blade.php" class=""><i class="bi bi-person"></i> Profile</a><a href="my-/playlists" class=""><i class="bi bi-music-note-list"></i> My Playlists</a><a href="favorite-/songs" class=""><i class="bi bi-heart"></i> Favorite Songs</a><a href="liked-/albums" class=""><i class="bi bi-disc"></i> Liked Albums</a><a href="comments.blade.php" class=""><i class="bi bi-chat"></i> Comments</a><a href="billing-history.blade.php" class=""><i class="bi bi-credit-card"></i> Billing</a><a href="notifications.blade.php" class=""><i class="bi bi-bell"></i> Notifications</a><a href="settings.blade.php" class=""><i class="bi bi-gear"></i> Settings</a>
  </nav>
</aside><div class="col-lg-9 p-4 p-md-5">
<h2 class="serif mb-1">Welcome back, Sarah</h2><p class="text-muted">Here's what's happening in your worship journey.</p>
<div class="row g-3 mt-2">
<div class="col-6 col-md-3"><div class="stat-card bg-ucc-primary"><i class="bi bi-heart fs-3 opacity-75"></i><h3 class="mt-2 mb-0">24</h3><small>Favorite Songs</small></div></div><div class="col-6 col-md-3"><div class="stat-card bg-ucc-dark"><i class="bi bi-music-note-list fs-3 opacity-75"></i><h3 class="mt-2 mb-0">8</h3><small>Playlists</small></div></div><div class="col-6 col-md-3"><div class="stat-card bg-warning text-dark"><i class="bi bi-disc fs-3 opacity-75"></i><h3 class="mt-2 mb-0">12</h3><small>Liked Albums</small></div></div><div class="col-6 col-md-3"><div class="stat-card bg-success"><i class="bi bi-clock fs-3 opacity-75"></i><h3 class="mt-2 mb-0">142</h3><small>Hours Listened</small></div></div>
</div>

<div class="row g-4 mt-2">
  <div class="col-lg-7"><div class="card border-0 shadow-sm p-4"><div class="d-flex justify-content-between align-items-center mb-3"><h5 class="serif mb-0">Recently Played</h5><a href="#" class="small text-ucc-primary">View all</a></div>
    <div class="d-flex align-items-center py-2 border-bottom"><div class="cover-art me-3" style="width:48px;height:48px"><i class="bi bi-music-note small"></i></div><div class="flex-grow-1"><div class="fw-semibold small">Amazing Grace (Reimagined)</div><small class="text-muted">Bethany Hayes</small></div><small class="text-muted">4:21</small></div><div class="d-flex align-items-center py-2 border-bottom"><div class="cover-art me-3" style="width:48px;height:48px"><i class="bi bi-music-note small"></i></div><div class="flex-grow-1"><div class="fw-semibold small">How Great Thou Art</div><small class="text-muted">David Whitman</small></div><small class="text-muted">5:02</small></div><div class="d-flex align-items-center py-2 border-bottom"><div class="cover-art me-3" style="width:48px;height:48px"><i class="bi bi-music-note small"></i></div><div class="flex-grow-1"><div class="fw-semibold small">Holy Spirit Move</div><small class="text-muted">Grace Carter</small></div><small class="text-muted">3:48</small></div><div class="d-flex align-items-center py-2 border-bottom"><div class="cover-art me-3" style="width:48px;height:48px"><i class="bi bi-music-note small"></i></div><div class="flex-grow-1"><div class="fw-semibold small">Old Rugged Cross</div><small class="text-muted">The Hallelujah Quartet</small></div><small class="text-muted">4:15</small></div><div class="d-flex align-items-center py-2 "><div class="cover-art me-3" style="width:48px;height:48px"><i class="bi bi-music-note small"></i></div><div class="flex-grow-1"><div class="fw-semibold small">Sanctuary</div><small class="text-muted">Mercy Choir</small></div><small class="text-muted">6:10</small></div>
  </div></div>
  <div class="col-lg-5"><div class="card border-0 shadow-sm p-4 mb-3"><h5 class="serif">Subscription</h5><span class="tag mb-2">Premium Annual</span><p class="text-muted small mb-2">Renews on Dec 15, 2026</p><div class="progress" style="height:6px"><div class="progress-bar bg-ucc-primary" style="width:60%"></div></div><a href="/subscriptions" class="btn btn-outline-ucc btn-sm mt-3" style="color:var(--ucc-primary);border-color:var(--ucc-primary)">Manage Plan</a></div>
  <div class="card border-0 shadow-sm p-4"><h5 class="serif">Notifications</h5><div class="d-flex gap-2 py-2 border-bottom"><i class="bi bi-bell text-ucc-primary"></i><small>New album from Bethany Hayes</small></div><div class="d-flex gap-2 py-2 border-bottom"><i class="bi bi-bell text-ucc-primary"></i><small>Your weekly playlist is ready</small></div><div class="d-flex gap-2 py-2 border-bottom"><i class="bi bi-bell text-ucc-primary"></i><small>Grace Carter is going on tour</small></div></div></div>
</div></div></div></div></main>
@include('blade.footer')
  <script src="{{ asset('js/foot.js') }}"></script>


<script src="js/main.js"></script>
</body></html>
