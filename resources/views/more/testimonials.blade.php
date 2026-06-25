@extends('layouts.app')
@section('title', 'Testimonials')

@section('content')

<main style="padding-top:42px">

<header class="page-header"><div class="container"><span class="badge bg-ucc-gold text-dark mb-3 px-3 py-2">Voices of the Community</span><h1 class="serif">Testimonials</h1><p class="lead opacity-75 mt-2">Hear how worship music has impacted lives across the world.</p></div></header>

<section class="section bg-ucc-cream">
  <div class="container">
    <div id="bigQuote" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner text-center" style="max-width:800px;margin:0 auto">
        <div class="carousel-item active"><i class="bi bi-quote text-ucc-gold" style="font-size:4rem"></i><p class="lead fst-italic serif">"This music has been the soundtrack of my faith journey. Every album reaches deeper than the last."</p><div class="mt-3 fw-semibold">— Esther N., Lifelong Listener</div></div>
        <div class="carousel-item"><i class="bi bi-quote text-ucc-gold" style="font-size:4rem"></i><p class="lead fst-italic serif">"UCC Music Hub is where I discover worship I can trust. The curation is unmatched."</p><div class="mt-3 fw-semibold">— Pastor Michael A.</div></div>
        <div class="carousel-item"><i class="bi bi-quote text-ucc-gold" style="font-size:4rem"></i><p class="lead fst-italic serif">"Our youth group's worship nights have come alive thanks to the playlists here."</p><div class="mt-3 fw-semibold">— Hannah B., Youth Pastor</div></div>
      </div>
      <button class="carousel-control-prev" data-bs-target="#bigQuote" data-bs-slide="prev"><span class="carousel-control-prev-icon" style="filter:invert(1)"></span></button>
      <button class="carousel-control-next" data-bs-target="#bigQuote" data-bs-slide="next"><span class="carousel-control-next-icon" style="filter:invert(1)"></span></button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-title text-center"><div class="sub">What People Say</div><h2>Stories &amp; Reviews</h2></div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4"><div class="testimonial-card">
        <div class="quote serif">"</div>
        <p class="fst-italic">UCC Music's sound is healing and uplifting — every track feels intentional and alive. It has transformed our Sunday gatherings.</p>
        <div class="d-flex align-items-center mt-3">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200" class="rounded-circle me-3" style="width:54px;height:54px;object-fit:cover" alt="Sarah K.">
          <div><div class="serif fw-semibold">Sarah K.</div><small class="text-muted">Worship Leader, Houston</small></div>
        </div>
      </div></div>

      <div class="col-md-6 col-lg-4"><div class="testimonial-card">
        <div class="quote serif">"</div>
        <p class="fst-italic">One of the most authentic acts in contemporary worship music today. Their music ministers deeply to our congregation.</p>
        <div class="d-flex align-items-center mt-3">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200" class="rounded-circle me-3" style="width:54px;height:54px;object-fit:cover" alt="Pastor Daniel R.">
          <div><div class="serif fw-semibold">Pastor Daniel R.</div><small class="text-muted">Grace Community Church</small></div>
        </div>
      </div></div>

      <div class="col-md-6 col-lg-4"><div class="testimonial-card">
        <div class="quote serif">"</div>
        <p class="fst-italic">I play these songs every morning during my devotion. They draw me closer to God in ways I never imagined.</p>
        <div class="d-flex align-items-center mt-3">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200" class="rounded-circle me-3" style="width:54px;height:54px;object-fit:cover" alt="Mary T.">
          <div><div class="serif fw-semibold">Mary T.</div><small class="text-muted">Listener, London</small></div>
        </div>
      </div></div>

      <div class="col-md-6 col-lg-4"><div class="testimonial-card">
        <div class="quote serif">"</div>
        <p class="fst-italic">A defining voice in modern worship — refined, scriptural, and stunningly produced.</p>
        <div class="d-flex align-items-center mt-3">
          <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?w=200" class="rounded-circle me-3" style="width:54px;height:54px;object-fit:cover" alt="Worship Weekly">
          <div><div class="serif fw-semibold">Worship Weekly</div><small class="text-muted">Publication</small></div>
        </div>
      </div></div>

      <div class="col-md-6 col-lg-4"><div class="testimonial-card">
        <div class="quote serif">"</div>
        <p class="fst-italic">They brought our festival to a standstill. A truly transcendent live experience — heaven met earth that night.</p>
        <div class="d-flex align-items-center mt-3">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200" class="rounded-circle me-3" style="width:54px;height:54px;object-fit:cover" alt="James O.">
          <div><div class="serif fw-semibold">James O.</div><small class="text-muted">Festival Organizer</small></div>
        </div>
      </div></div>

      <div class="col-md-6 col-lg-4"><div class="testimonial-card">
        <div class="quote serif">"</div>
        <p class="fst-italic">I use UCC Music in our worship arts classes. The musicianship and theology are second to none.</p>
        <div class="d-flex align-items-center mt-3">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200" class="rounded-circle me-3" style="width:54px;height:54px;object-fit:cover" alt="Rebecca M.">
          <div><div class="serif fw-semibold">Rebecca M.</div><small class="text-muted">Music Educator</small></div>
        </div>
      </div></div>
</div>
  </div>
</section>

<section class="section bg-ucc-dark text-white">
  <div class="container text-center"><h2 class="serif">Share Your Story</h2><p class="opacity-75">Has worship music touched your life? We'd love to hear from you.</p>
    <form class="row g-2 justify-content-center mt-3" onsubmit="event.preventDefault();alert('Thank you for sharing!');this.reset();">
      <div class="col-md-4"><input class="form-control" placeholder="Your name" required></div>
      <div class="col-md-5"><input class="form-control" placeholder="Your testimony (short)" required></div>
      <div class="col-md-auto"><button class="btn btn-ucc">Submit</button></div>
    </form>
  </div>
</section>

</main>
@endsection

