@extends('layouts.app')
@section('title', 'Blog')

@section('content')
<body>
<main style="padding-top:42px">

<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Stories & Insights</p>
    <h1 class="serif">Blog</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Blog</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <article class="row g-4 mb-5 align-items-center">
      <div class="col-md-6"><img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1000" class="img-fluid rounded-4" alt="Featured"></div>
      <div class="col-md-6"><span class="tag">Featured</span><h2 class="serif mt-2">Why Worship Music Heals the Soul</h2><p class="text-muted">A deep dive into the neuroscience and theology behind why singing praise transforms lives.</p><a href="/blog/single" class="btn btn-ucc">Read Article</a></div>
    </article>
    <div class="row g-5">
      <div class="col-lg-8">
        <div class="row g-4">
        <div class="col-md-6"><article class="card card-music h-100"><img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?w=800" class="card-img-top" alt="" style="aspect-ratio:16/10;object-fit:cover"><div class="card-body"><span class="tag">Worship</span><h5 class="serif mt-2">5 Hymns That Changed History</h5><small class="text-muted">June 6, 2026 · 4 min read</small></div></article></div><div class="col-md-6"><article class="card card-music h-100"><img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=800" class="card-img-top" alt="" style="aspect-ratio:16/10;object-fit:cover"><div class="card-body"><span class="tag">Ministry</span><h5 class="serif mt-2">Leading Worship Authentically</h5><small class="text-muted">June 7, 2026 · 4 min read</small></div></article></div><div class="col-md-6"><article class="card card-music h-100"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?w=800" class="card-img-top" alt="" style="aspect-ratio:16/10;object-fit:cover"><div class="card-body"><span class="tag">Hymns</span><h5 class="serif mt-2">The Story Behind It Is Well</h5><small class="text-muted">June 8, 2026 · 4 min read</small></div></article></div><div class="col-md-6"><article class="card card-music h-100"><img src="https://images.unsplash.com/photo-1485579149621-3123dd979885?w=800" class="card-img-top" alt="" style="aspect-ratio:16/10;object-fit:cover"><div class="card-body"><span class="tag">Lifestyle</span><h5 class="serif mt-2">Daily Devotional Habits</h5><small class="text-muted">June 9, 2026 · 4 min read</small></div></article></div><div class="col-md-6"><article class="card card-music h-100"><img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=800" class="card-img-top" alt="" style="aspect-ratio:16/10;object-fit:cover"><div class="card-body"><span class="tag">Choir</span><h5 class="serif mt-2">How to Start a Church Choir</h5><small class="text-muted">June 10, 2026 · 4 min read</small></div></article></div><div class="col-md-6"><article class="card card-music h-100"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=800" class="card-img-top" alt="" style="aspect-ratio:16/10;object-fit:cover"><div class="card-body"><span class="tag">Gospel</span><h5 class="serif mt-2">Power of Gospel Music</h5><small class="text-muted">June 11, 2026 · 4 min read</small></div></article></div>
        </div>
        <nav class="mt-5 d-flex justify-content-center"><ul class="pagination"><li class="page-item active"><a class="page-link">1</a></li><li class="page-item"><a class="page-link">2</a></li><li class="page-item"><a class="page-link">3</a></li></ul></nav>
      </div>
      <aside class="col-lg-4">
        <div class="card border-0 bg-ucc-cream p-4 mb-4">
          <h6 class="text-ucc-primary text-uppercase fw-bold small">Search</h6>
          <div class="input-group mt-2"><input class="form-control" placeholder="Search articles..."><button class="btn btn-ucc"><i class="bi bi-search"></i></button></div>
        </div>
        <div class="card border-0 bg-ucc-cream p-4 mb-4">
          <h6 class="text-ucc-primary text-uppercase fw-bold small">Categories</h6>
          <ul class="list-unstyled mt-3 mb-0"><li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between"><span>Worship</span><span class="text-muted small">(24)</span></a></li><li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between"><span>Ministry</span><span class="text-muted small">(18)</span></a></li><li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between"><span>Hymns</span><span class="text-muted small">(12)</span></a></li><li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between"><span>Lifestyle</span><span class="text-muted small">(16)</span></a></li><li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between"><span>Music Theory</span><span class="text-muted small">(8)</span></a></li><li class="mb-2"><a href="#" class="text-decoration-none text-dark d-flex justify-content-between"><span>Testimonies</span><span class="text-muted small">(10)</span></a></li></ul>
        </div>
        <div class="card border-0 bg-ucc-cream p-4">
          <h6 class="text-ucc-primary text-uppercase fw-bold small">Recent Posts</h6>
          <a href="single.blade.php" class="d-flex gap-3 mt-3 text-decoration-none text-dark"><img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?w=200" style="width:70px;height:70px;object-fit:cover;border-radius:8px" alt=""><div><div class="fw-semibold small serif">Leading Worship Authentically</div><small class="text-muted">June 6, 2026</small></div></a><a href="single.blade.php" class="d-flex gap-3 mt-3 text-decoration-none text-dark"><img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=200" style="width:70px;height:70px;object-fit:cover;border-radius:8px" alt=""><div><div class="fw-semibold small serif">The Story Behind It Is Well</div><small class="text-muted">June 7, 2026</small></div></a><a href="single.blade.php" class="d-flex gap-3 mt-3 text-decoration-none text-dark"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?w=200" style="width:70px;height:70px;object-fit:cover;border-radius:8px" alt=""><div><div class="fw-semibold small serif">Daily Devotional Habits</div><small class="text-muted">June 8, 2026</small></div></a>
        </div>
      </aside>
    </div>
  </div>
</section>
</main>
@endsection
