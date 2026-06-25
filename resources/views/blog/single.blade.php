@extends('layouts.app')
@section('title', 'Why Worship Heals The Soul')

@section('content')
<body>
<main style="padding-top:42px">

<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Article · Worship · 6 min read</p>
    <h1 class="serif">Why Worship Music Heals the Soul</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Article</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="row g-5">
      <article class="col-lg-8">
        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1200" class="img-fluid rounded-4 mb-4" alt="">
        <p class="lead">Worship music is more than a Sunday-morning soundtrack. Scientific research and centuries of testimony agree: praise transforms us from the inside out.</p>
        <h3 class="serif mt-4">The Power of Praise</h3>
        <p>When we lift our voices in worship, our brains release dopamine and oxytocin — the same chemicals associated with deep connection and joy. Combined with the spiritual reality of God's presence inhabiting our praise, the result is profoundly healing.</p>
        <h3 class="serif mt-4">Songs That Endure</h3>
        <p>From the Psalms of David to the hymns of the Wesleys, worship music has carried God's people through every season — exile, revival, war, and renewal. The songs we sing shape the faith we carry.</p>
        <blockquote class="border-start border-4 ps-3 my-4 fst-italic" style="border-color:var(--ucc-gold)!important">"Let the word of Christ dwell in you richly, teaching and admonishing one another in psalms and hymns and spiritual songs." — Colossians 3:16</blockquote>
        <p>Whether you're walking through joy or grief, the songs of the church meet you there. Let worship be more than background — let it be the soundtrack of your healing.</p>
        <div class="d-flex align-items-center gap-3 mt-5 p-4 bg-ucc-cream rounded-4">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200" style="width:70px;height:70px;border-radius:50%;object-fit:cover" alt="">
          <div><div class="small text-uppercase text-ucc-primary fw-bold">Author</div><h6 class="serif mb-0">Sarah Mitchell</h6><small class="text-muted">Worship Pastor & Writer</small></div>
        </div>

        <h4 class="serif mt-5">Comments (3)</h4>
        <div class="d-flex gap-3 mt-4"><div class="rounded-circle bg-ucc-cream d-flex align-items-center justify-content-center" style="width:48px;height:48px"><i class="bi bi-person text-ucc-primary"></i></div><div><div><strong>Daniel R.</strong> <small class="text-muted">· 2 days ago</small></div><p class="mb-0">Beautiful piece. I needed this reminder today.</p></div></div><div class="d-flex gap-3 mt-4"><div class="rounded-circle bg-ucc-cream d-flex align-items-center justify-content-center" style="width:48px;height:48px"><i class="bi bi-person text-ucc-primary"></i></div><div><div><strong>Emily T.</strong> <small class="text-muted">· 3 days ago</small></div><p class="mb-0">Sharing with my worship team!</p></div></div><div class="d-flex gap-3 mt-4"><div class="rounded-circle bg-ucc-cream d-flex align-items-center justify-content-center" style="width:48px;height:48px"><i class="bi bi-person text-ucc-primary"></i></div><div><div><strong>Marcus L.</strong> <small class="text-muted">· 5 days ago</small></div><p class="mb-0">That Colossians verse hit different.</p></div></div>
        <form class="mt-4"><div class="mb-3"><label class="form-label">Leave a comment</label><textarea class="form-control" rows="4" placeholder="Share your thoughts..."></textarea></div><button class="btn btn-ucc">Post Comment</button></form>
      </article>
      <aside class="col-lg-4">
        <div class="card border-0 bg-ucc-cream p-4 mb-4">
          <h6 class="text-ucc-primary text-uppercase fw-bold small">Related Posts</h6>
          <a href="single.blade.php" class="d-flex gap-3 mt-3 text-decoration-none text-dark"><img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?w=200" style="width:70px;height:70px;object-fit:cover;border-radius:8px" alt=""><div><div class="fw-semibold small serif">Leading Worship Authentically</div><small class="text-muted">4 min read</small></div></a><a href="single.blade.php" class="d-flex gap-3 mt-3 text-decoration-none text-dark"><img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=200" style="width:70px;height:70px;object-fit:cover;border-radius:8px" alt=""><div><div class="fw-semibold small serif">The Story Behind It Is Well</div><small class="text-muted">4 min read</small></div></a><a href="single.blade.php" class="d-flex gap-3 mt-3 text-decoration-none text-dark"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?w=200" style="width:70px;height:70px;object-fit:cover;border-radius:8px" alt=""><div><div class="fw-semibold small serif">Daily Devotional Habits</div><small class="text-muted">4 min read</small></div></a>
        </div>
      </aside>
    </div>
  </div>
</section>
</main>
@endsection
