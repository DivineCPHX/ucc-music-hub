@extends('layouts.app')
@section('title', 'About')


@section('content')

  <main style="padding-top:42px">

    <header class="page-header" style="margin-top:0">
      <div class="container pt-5">
        <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Our Story</p>
        <h1 class="serif">About Us</h1>
        <nav>
          <ol class="breadcrumb mt-3 mb-0">
            <li class="breadcrumb-item"><a href="index.html" class="text-ucc-gold text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active text-white-50">About</li>
          </ol>
        </nav>
      </div>
    </header>
    <section class="section">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-md-6"><img src="https://images.unsplash.com/photo-1438032005730-c779502df39b?w=800"
              class="img-fluid rounded-4" alt=""></div>
          <div class="col-md-6">
            <span class="tag">Since 2018</span>
            <h2 class="serif mt-2">A Platform Built for Worship</h2>
            <p>UCC Music Hub began with a simple conviction: the church needs a home for worship music that honors both
              the artist and the listener. Founded by a small team of pastors and musicians, we've grown into a global
              community of over 500,000 worshippers.</p>
            <p>Every feature we build, every song we curate, exists to deepen your walk with Jesus.</p>
          </div>
        </div>
        <div class="row g-4 mt-5">
          <div class="col-md-6">
            <div class="p-5 bg-ucc-cream rounded-4 h-100"><i class="bi bi-bullseye fs-1 text-ucc-primary"></i>
              <h3 class="serif mt-3">Our Mission</h3>
              <p>To connect hearts to God through anointed worship music, equipping the church to lift His name in every
                nation.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5 bg-ucc-cream rounded-4 h-100"><i class="bi bi-eye fs-1 text-ucc-primary"></i>
              <h3 class="serif mt-3">Our Vision</h3>
              <p>A world where every believer has free access to Spirit-filled music that draws them closer to Christ.
              </p>
            </div>
          </div>
        </div>

        <h3 class="serif text-center mt-5 mb-4">Meet the Team</h3>
        <div class="row g-4 justify-content-center">
          <div class="col-6 col-md-3 text-center">
            <div class="artist-circle mb-3"><img
                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600" alt=""></div>
            <h6 class="serif">Pastor John Carter</h6><small class="text-muted">Founder & CEO</small>
          </div>
          <div class="col-6 col-md-3 text-center">
            <div class="artist-circle mb-3"><img
                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600" alt=""></div>
            <h6 class="serif">Sarah Mitchell</h6><small class="text-muted">Worship Director</small>
          </div>
          <div class="col-6 col-md-3 text-center">
            <div class="artist-circle mb-3"><img
                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=600" alt=""></div>
            <h6 class="serif">David Lee</h6><small class="text-muted">Head of Music</small>
          </div>
          <div class="col-6 col-md-3 text-center">
            <div class="artist-circle mb-3"><img
                src="https://images.unsplash.com/photo-1521119989659-a83eee488004?w=600" alt=""></div>
            <h6 class="serif">Rachel Adams</h6><small class="text-muted">Community Lead</small>
          </div>
        </div>

        <div class="row g-4 mt-5 text-center">
          <div class="col-6 col-md-3">
            <h2 class="serif text-ucc-primary">500K+</h2>
            <p class="text-muted mb-0">Listeners</p>
          </div>
          <div class="col-6 col-md-3">
            <h2 class="serif text-ucc-primary">1,200+</h2>
            <p class="text-muted mb-0">Artists</p>
          </div>
          <div class="col-6 col-md-3">
            <h2 class="serif text-ucc-primary">50K+</h2>
            <p class="text-muted mb-0">Songs</p>
          </div>
          <div class="col-6 col-md-3">
            <h2 class="serif text-ucc-primary">65+</h2>
            <p class="text-muted mb-0">Countries</p>
          </div>
        </div>

        <h3 class="serif text-center mt-5 mb-2">Our Collaborations</h3>
        <p class="text-center text-muted mb-4">We partner with ministries, labels, and worship collectives around the
          world.</p>
        <div class="row g-4 align-items-stretch">
          <div class="col-6 col-md-4 col-lg-2">
            <div class="bg-ucc-cream rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center"><i
                class="bi bi-music-note-beamed fs-2 text-ucc-primary"></i>
              <h6 class="serif mt-2 mb-0">Hillsong</h6><small class="text-muted">Worship Partner</small>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div class="bg-ucc-cream rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center"><i
                class="bi bi-broadcast fs-2 text-ucc-primary"></i>
              <h6 class="serif mt-2 mb-0">Bethel Music</h6><small class="text-muted">Label</small>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div class="bg-ucc-cream rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center"><i
                class="bi bi-stars fs-2 text-ucc-primary"></i>
              <h6 class="serif mt-2 mb-0">Maverick City</h6><small class="text-muted">Collective</small>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div class="bg-ucc-cream rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center"><i
                class="bi bi-bookmark-heart fs-2 text-ucc-primary"></i>
              <h6 class="serif mt-2 mb-0">Elevation</h6><small class="text-muted">Church</small>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div class="bg-ucc-cream rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center"><i
                class="bi bi-mic fs-2 text-ucc-primary"></i>
              <h6 class="serif mt-2 mb-0">Integrity</h6><small class="text-muted">Music</small>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div class="bg-ucc-cream rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center"><i
                class="bi bi-globe2 fs-2 text-ucc-primary"></i>
              <h6 class="serif mt-2 mb-0">UCC Global</h6><small class="text-muted">Ministry</small>
            </div>
          </div>
        </div>
        <div class="text-center mt-4"><a href="contact.html" class="btn btn-outline-ucc"><i
              class="bi bi-handshake me-2"></i>Partner With Us</a></div>

      </div>
    </section>
  </main>
@endsection
