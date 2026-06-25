<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>My Comments | UCC Music Hub</title>
<meta name="description" content="User My Comments">
<meta property="og:title" content="My Comments | UCC Music Hub">
<meta property="og:description" content="User My Comments">
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
  <a href="dashboard.blade.php" class=""><i class="bi bi-speedometer2"></i> Dashboard</a><a href="profile.blade.php" class=""><i class="bi bi-person"></i> Profile</a><a href="my-/playlists" class=""><i class="bi bi-music-note-list"></i> My Playlists</a><a href="favorite-/songs" class=""><i class="bi bi-heart"></i> Favorite Songs</a><a href="liked-/albums" class=""><i class="bi bi-disc"></i> Liked Albums</a><a href="comments.blade.php" class="active"><i class="bi bi-chat"></i> Comments</a><a href="billing-history.blade.php" class=""><i class="bi bi-credit-card"></i> Billing</a><a href="notifications.blade.php" class=""><i class="bi bi-bell"></i> Notifications</a><a href="settings.blade.php" class=""><i class="bi bi-gear"></i> Settings</a>
  </nav>
</aside><div class="col-lg-9 p-4 p-md-5"><h2 class="serif mb-4">My Comments</h2><div class="card border-0 shadow-sm"><div class="table-responsive"><table class="table align-middle mb-0"><thead class="table-light"><tr><th>On</th><th>Comment</th><th>Date</th><th></th></tr></thead><tbody><tr><td><a href="#" class="text-decoration-none fw-semibold text-dark">Amazing Grace (Reimagined)</a></td><td>Beautiful arrangement!</td><td class="text-muted">2 days ago</td><td><button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button></td></tr><tr><td><a href="#" class="text-decoration-none fw-semibold text-dark">Songs of the Sanctuary</a></td><td>Worship at its best.</td><td class="text-muted">5 days ago</td><td><button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button></td></tr><tr><td><a href="#" class="text-decoration-none fw-semibold text-dark">Holy Spirit Move</a></td><td>Such a powerful song.</td><td class="text-muted">1 week ago</td><td><button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button></td></tr></tbody></table></div></div></div></div></div></main>
@include('blade.footer')
  <script src="{{ asset('js/foot.js') }}"></script>


<script src="js/main.js"></script>
</body></html>
