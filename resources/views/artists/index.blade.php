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
    <div class="row g-3 align-items-center mb-5">
      <div class="col-md-6"><div class="input-group input-group-lg"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input class="form-control" placeholder="Search artists..."></div></div>
      <div class="col-md-3"><select class="form-select form-select-lg"><option>All Genres</option><option>Worship</option><option>Gospel</option><option>Hymns</option><option>Contemporary</option></select></div>
      <div class="col-md-3"><select class="form-select form-select-lg"><option>Sort: Popular</option><option>Newest</option><option>A-Z</option></select></div>
    </div>
    <div class="row g-5"><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600" alt="Bethany Hayes"></div>
    <h6 class="serif mb-1">Bethany Hayes</h6>
    <small class="text-muted">Worship</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600" alt="David Whitman"></div>
    <h6 class="serif mb-1">David Whitman</h6>
    <small class="text-muted">Gospel</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=600" alt="Grace Carter"></div>
    <h6 class="serif mb-1">Grace Carter</h6>
    <small class="text-muted">Contemporary</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?w=600" alt="The Hallelujah Quartet"></div>
    <h6 class="serif mb-1">The Hallelujah Quartet</h6>
    <small class="text-muted">Southern Gospel</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=600" alt="Mercy Choir"></div>
    <h6 class="serif mb-1">Mercy Choir</h6>
    <small class="text-muted">Choral</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600" alt="Isaiah Brooks"></div>
    <h6 class="serif mb-1">Isaiah Brooks</h6>
    <small class="text-muted">Hymns</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600" alt="Lily Monroe"></div>
    <h6 class="serif mb-1">Lily Monroe</h6>
    <small class="text-muted">Worship</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600" alt="Restoration Band"></div>
    <h6 class="serif mb-1">Restoration Band</h6>
    <small class="text-muted">Contemporary</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600" alt="Bethany Hayes"></div>
    <h6 class="serif mb-1">Bethany Hayes</h6>
    <small class="text-muted">Worship</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600" alt="David Whitman"></div>
    <h6 class="serif mb-1">David Whitman</h6>
    <small class="text-muted">Gospel</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=600" alt="Grace Carter"></div>
    <h6 class="serif mb-1">Grace Carter</h6>
    <small class="text-muted">Contemporary</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?w=600" alt="The Hallelujah Quartet"></div>
    <h6 class="serif mb-1">The Hallelujah Quartet</h6>
    <small class="text-muted">Southern Gospel</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=600" alt="Mercy Choir"></div>
    <h6 class="serif mb-1">Mercy Choir</h6>
    <small class="text-muted">Choral</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600" alt="Isaiah Brooks"></div>
    <h6 class="serif mb-1">Isaiah Brooks</h6>
    <small class="text-muted">Hymns</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600" alt="Lily Monroe"></div>
    <h6 class="serif mb-1">Lily Monroe</h6>
    <small class="text-muted">Worship</small>
  </a>
</div><div class="col-6 col-md-4 col-lg-3 text-center">
  <a href="details.blade.php" class="text-decoration-none text-reset">
    <div class="artist-circle mb-3"><img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600" alt="Restoration Band"></div>
    <h6 class="serif mb-1">Restoration Band</h6>
    <small class="text-muted">Contemporary</small>
  </a>
</div></div>
    <nav class="mt-5 d-flex justify-content-center"><ul class="pagination"><li class="page-item disabled"><a class="page-link">‹</a></li><li class="page-item active"><a class="page-link">1</a></li><li class="page-item"><a class="page-link">2</a></li><li class="page-item"><a class="page-link">3</a></li><li class="page-item"><a class="page-link">›</a></li></ul></nav>
  </div>
</section>
</main>
@endsection
