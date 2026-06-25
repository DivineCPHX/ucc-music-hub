@extends('layouts.app')
@section('title', 'Playlists')

@section('content')
<main style="padding-top:42px">

<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Curated</p>
    <h1 class="serif">Playlists</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Playlists</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="input-group input-group-lg mb-5"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input class="form-control" placeholder="Search playlists..."></div>
    <h4 class="serif mb-4">Featured</h4>
    <div class="row g-4 mb-5"><div class="col-sm-6 col-md-4 col-lg-3"><a href="details.blade.php" class="text-decoration-none text-reset"><div class="card card-music h-100"><div class="cover" style="background:linear-gradient(135deg,#7a1f2b,#c9a96a)"><div class="d-flex align-items-center justify-content-center h-100 text-white"><i class="bi bi-music-note-list display-3"></i></div></div><div class="card-body"><h6 class="serif">Sunday Morning Worship</h6><small class="text-muted">20 songs · UCC Music</small></div></div></a></div><div class="col-sm-6 col-md-4 col-lg-3"><a href="details.blade.php" class="text-decoration-none text-reset"><div class="card card-music h-100"><div class="cover" style="background:linear-gradient(135deg,#1b1320,#7a1f2b)"><div class="d-flex align-items-center justify-content-center h-100 text-white"><i class="bi bi-music-note-list display-3"></i></div></div><div class="card-body"><h6 class="serif">Quiet Time with God</h6><small class="text-muted">24 songs · UCC Music</small></div></div></a></div><div class="col-sm-6 col-md-4 col-lg-3"><a href="details.blade.php" class="text-decoration-none text-reset"><div class="card card-music h-100"><div class="cover" style="background:linear-gradient(135deg,#c9a96a,#7a1f2b)"><div class="d-flex align-items-center justify-content-center h-100 text-white"><i class="bi bi-music-note-list display-3"></i></div></div><div class="card-body"><h6 class="serif">Hymns for the Soul</h6><small class="text-muted">28 songs · UCC Music</small></div></div></a></div><div class="col-sm-6 col-md-4 col-lg-3"><a href="details.blade.php" class="text-decoration-none text-reset"><div class="card card-music h-100"><div class="cover" style="background:linear-gradient(135deg,#3d1f5a,#7a1f2b)"><div class="d-flex align-items-center justify-content-center h-100 text-white"><i class="bi bi-music-note-list display-3"></i></div></div><div class="card-body"><h6 class="serif">Gospel Power Hour</h6><small class="text-muted">32 songs · UCC Music</small></div></div></a></div><div class="col-sm-6 col-md-4 col-lg-3"><a href="details.blade.php" class="text-decoration-none text-reset"><div class="card card-music h-100"><div class="cover" style="background:linear-gradient(135deg,#7a1f2b,#1b1320)"><div class="d-flex align-items-center justify-content-center h-100 text-white"><i class="bi bi-music-note-list display-3"></i></div></div><div class="card-body"><h6 class="serif">Acoustic Praise</h6><small class="text-muted">36 songs · UCC Music</small></div></div></a></div><div class="col-sm-6 col-md-4 col-lg-3"><a href="details.blade.php" class="text-decoration-none text-reset"><div class="card card-music h-100"><div class="cover" style="background:linear-gradient(135deg,#c9a96a,#3d1f5a)"><div class="d-flex align-items-center justify-content-center h-100 text-white"><i class="bi bi-music-note-list display-3"></i></div></div><div class="card-body"><h6 class="serif">Family Devotion</h6><small class="text-muted">40 songs · UCC Music</small></div></div></a></div><div class="col-sm-6 col-md-4 col-lg-3"><a href="details.blade.php" class="text-decoration-none text-reset"><div class="card card-music h-100"><div class="cover" style="background:linear-gradient(135deg,#1b1320,#c9a96a)"><div class="d-flex align-items-center justify-content-center h-100 text-white"><i class="bi bi-music-note-list display-3"></i></div></div><div class="card-body"><h6 class="serif">Healing Songs</h6><small class="text-muted">44 songs · UCC Music</small></div></div></a></div><div class="col-sm-6 col-md-4 col-lg-3"><a href="details.blade.php" class="text-decoration-none text-reset"><div class="card card-music h-100"><div class="cover" style="background:linear-gradient(135deg,#5e1721,#c9a96a)"><div class="d-flex align-items-center justify-content-center h-100 text-white"><i class="bi bi-music-note-list display-3"></i></div></div><div class="card-body"><h6 class="serif">Christmas Worship</h6><small class="text-muted">48 songs · UCC Music</small></div></div></a></div></div>
  </div>
</section>
</main>
@endsection
