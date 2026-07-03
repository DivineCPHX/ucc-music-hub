@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main style="padding-top:42px">
    <section class="hero">
      <div class="container">
        <div class="row align-items-center g-4 g-lg-5 flex-nowrap flex-lg-row">
          <div class="col-8 col-lg-7">
            {{-- <span class="badge rounded-pill bg-ucc-gold text-dark mb-3 px-3 py-2">Connecting Hearts Through Music</span> --}}
            <h1 class="serif">Worship That Moves <span class="text-ucc-gold">Mountains</span></h1>
            <p class="lead opacity-75 mt-3 d-none d-sm-block">Stream thousands of worship songs, hymns and gospel music
              from anointed artists. Build your faith with curated playlists for every season.</p>
            <p class="opacity-75 mt-2 mb-0 d-sm-none small">Stream worship songs, hymns and gospel music from anointed
              artists.</p>
            <div class="mt-3 mt-lg-4 d-flex flex-wrap gap-2">
              <a href="/register" class="btn btn-ucc btn-lg px-4"><i class="bi bi-play-circle me-2"></i>Start
                Listening Free</a>
              <a href="/subscriptions" class="btn btn-outline-ucc btn-lg px-4">View Plans</a>
            </div>
            <div class="mt-4 mt-lg-5 d-flex gap-3 gap-lg-4 flex-wrap small opacity-75">
              <div><i class="bi bi-star-fill text-ucc-gold"></i> 4.9 · 28k reviews</div>
              <div><i class="bi bi-people-fill text-ucc-gold"></i> 500k+ listeners</div>
              <div><i class="bi bi-music-note-list text-ucc-gold"></i> 50k+ songs</div>
            </div>
          </div>
          <div class="col-4 col-lg-5 text-center">
            <div class="position-relative d-inline-block">
              <img src="https://res.cloudinary.com/deyewrsnk/image/upload/f_auto,q_auto/nna_xljjtx"
                alt="Featured worship artist" class="hero-portrait">
              <span
                class="hero-feature-badge "" position-absolute bottom-0 start-50 translate-middle-x bg-ucc-gold text-dark px-3 py-2 rounded-pill fw-semibold small"
                style="white-space:nowrap"><i class="bi bi-mic-fill me-1"></i><span class="d-none d-lg-inline">
                  </span><span class="d-lg-none">Dr. Ukangwa Chinemerem Clement</span></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-ucc-cream">
      <div class="container">
        <div class="section-title text-center">
          <div class="sub">Featured</div>
          <h2>Anointed Artists</h2>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-6 col-md-4 col-lg-3 text-center">
            <a href="/artists/details" class="text-decoration-none text-reset">
              <div class="artist-circle mb-3"><img
                  src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600" alt="Bethany Hayes"></div>
              <h6 class="serif mb-1">Bethany Hayes</h6>
              <small class="text-muted">Worship</small>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 text-center">
            <a href="/artists/details" class="text-decoration-none text-reset">
              <div class="artist-circle mb-3"><img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600" alt="David Whitman"></div>
              <h6 class="serif mb-1">David Whitman</h6>
              <small class="text-muted">Gospel</small>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 text-center">
            <a href="/artists/details" class="text-decoration-none text-reset">
              <div class="artist-circle mb-3"><img
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=600" alt="Grace Carter"></div>
              <h6 class="serif mb-1">Grace Carter</h6>
              <small class="text-muted">Contemporary</small>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 text-center">
            <a href="/artists/details" class="text-decoration-none text-reset">
              <div class="artist-circle mb-3"><img
                  src="https://images.unsplash.com/photo-1521119989659-a83eee488004?w=600" alt="The Hallelujah Quartet">
              </div>
              <h6 class="serif mb-1">The Hallelujah Quartet</h6>
              <small class="text-muted">Southern Gospel</small>
            </a>
          </div>
        </div>
        <div class="text-center mt-5"><a href="/artists" class="btn btn-ucc">Browse All Artists <i
              class="bi bi-arrow-right ms-1"></i></a></div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-4">
          <div>
            <div class="sub text-ucc-primary fw-bold">New Releases</div>
            <h2 class="serif">Latest Albums</h2>
          </div>
          <a href="/albums" class="text-ucc-primary fw-semibold text-decoration-none">View all <i
              class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-4">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card card-music h-100">
              <div class="cover"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600"
                  alt="Songs of the Sanctuary"><span class="play"><i class="bi bi-play-fill"></i></span></div>
              <div class="card-body">
                <h6 class="mb-1 serif">Songs of the Sanctuary</h6>
                <small class="text-muted">Bethany Hayes · 2025</small>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card card-music h-100">
              <div class="cover"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600"
                  alt="Higher Ground"><span class="play"><i class="bi bi-play-fill"></i></span></div>
              <div class="card-body">
                <h6 class="mb-1 serif">Higher Ground</h6>
                <small class="text-muted">David Whitman · 2025</small>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card card-music h-100">
              <div class="cover"><img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600"
                  alt="Grace Unending"><span class="play"><i class="bi bi-play-fill"></i></span></div>
              <div class="card-body">
                <h6 class="mb-1 serif">Grace Unending</h6>
                <small class="text-muted">Grace Carter · 2024</small>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card card-music h-100">
              <div class="cover"><img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600"
                  alt="Hymns Reimagined"><span class="play"><i class="bi bi-play-fill"></i></span></div>
              <div class="card-body">
                <h6 class="mb-1 serif">Hymns Reimagined</h6>
                <small class="text-muted">The Hallelujah Quartet · 2024</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-ucc-dark">
      <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-4">
          <div>
            <div class="text-ucc-gold small fw-bold text-uppercase">This Week</div>
            <h2 class="text-white serif">Trending Songs</h2>
          </div>
          <a href="/songs" class="text-ucc-gold text-decoration-none">All Songs <i
              class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="d-flex align-items-center p-3 rounded" style="background:rgba(255,255,255,.04)">
              <div class="serif fs-3 text-ucc-gold me-3" style="width:30px">1</div>
              <div class="flex-grow-1">
                <div class="text-white fw-semibold">Amazing Grace (Reimagined)</div><small class="text-white-50">Bethany
                  Hayes · Worship</small>
              </div>
              <small class="text-white-50 me-3 d-none d-sm-inline">4:21</small>
              <button class="btn btn-sm btn-outline-ucc rounded-circle"><i class="bi bi-play-fill"></i></button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center p-3 rounded" style="background:rgba(255,255,255,.04)">
              <div class="serif fs-3 text-ucc-gold me-3" style="width:30px">2</div>
              <div class="flex-grow-1">
                <div class="text-white fw-semibold">How Great Thou Art</div><small class="text-white-50">David Whitman ·
                  Hymns</small>
              </div>
              <small class="text-white-50 me-3 d-none d-sm-inline">5:02</small>
              <button class="btn btn-sm btn-outline-ucc rounded-circle"><i class="bi bi-play-fill"></i></button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center p-3 rounded" style="background:rgba(255,255,255,.04)">
              <div class="serif fs-3 text-ucc-gold me-3" style="width:30px">3</div>
              <div class="flex-grow-1">
                <div class="text-white fw-semibold">Holy Spirit Move</div><small class="text-white-50">Grace Carter ·
                  Contemporary</small>
              </div>
              <small class="text-white-50 me-3 d-none d-sm-inline">3:48</small>
              <button class="btn btn-sm btn-outline-ucc rounded-circle"><i class="bi bi-play-fill"></i></button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center p-3 rounded" style="background:rgba(255,255,255,.04)">
              <div class="serif fs-3 text-ucc-gold me-3" style="width:30px">4</div>
              <div class="flex-grow-1">
                <div class="text-white fw-semibold">Old Rugged Cross</div><small class="text-white-50">The Hallelujah
                  Quartet · Southern Gospel</small>
              </div>
              <small class="text-white-50 me-3 d-none d-sm-inline">4:15</small>
              <button class="btn btn-sm btn-outline-ucc rounded-circle"><i class="bi bi-play-fill"></i></button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center p-3 rounded" style="background:rgba(255,255,255,.04)">
              <div class="serif fs-3 text-ucc-gold me-3" style="width:30px">5</div>
              <div class="flex-grow-1">
                <div class="text-white fw-semibold">Sanctuary</div><small class="text-white-50">Mercy Choir ·
                  Choral</small>
              </div>
              <small class="text-white-50 me-3 d-none d-sm-inline">6:10</small>
              <button class="btn btn-sm btn-outline-ucc rounded-circle"><i class="bi bi-play-fill"></i></button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center p-3 rounded" style="background:rgba(255,255,255,.04)">
              <div class="serif fs-3 text-ucc-gold me-3" style="width:30px">6</div>
              <div class="flex-grow-1">
                <div class="text-white fw-semibold">Sweet Hour of Prayer</div><small class="text-white-50">Isaiah Brooks
                  · Hymns</small>
              </div>
              <small class="text-white-50 me-3 d-none d-sm-inline">3:55</small>
              <button class="btn btn-sm btn-outline-ucc rounded-circle"><i class="bi bi-play-fill"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-ucc-cream">
      <div class="container">
        <div class="section-title text-center">
          <div class="sub">Curated</div>
          <h2>Featured Playlists</h2>
        </div>
        <div class="row g-4">

          <div class="col-sm-6 col-lg-3"><a href="/playlists/details" class="text-decoration-none text-reset">
              <div class="card card-music h-100">
                <div class="cover" style="background:linear-gradient(135deg,#7a1f2b,#c9a96a)">
                  <div class="d-flex align-items-center justify-content-center h-100 text-white"><i
                      class="bi bi-music-note-list display-3"></i></div>
                </div>
                <div class="card-body">
                  <h6 class="serif">Sunday Morning Worship</h6><small class="text-muted">20 songs · 1h 0m</small>
                </div>
              </div>
            </a></div>
          <div class="col-sm-6 col-lg-3"><a href="/playlists/details" class="text-decoration-none text-reset">
              <div class="card card-music h-100">
                <div class="cover" style="background:linear-gradient(135deg,#1b1320,#7a1f2b)">
                  <div class="d-flex align-items-center justify-content-center h-100 text-white"><i
                      class="bi bi-music-note-list display-3"></i></div>
                </div>
                <div class="card-body">
                  <h6 class="serif">Quiet Time with God</h6><small class="text-muted">25 songs · 2h 10m</small>
                </div>
              </div>
            </a></div>
          <div class="col-sm-6 col-lg-3"><a href="/playlists/details" class="text-decoration-none text-reset">
              <div class="card card-music h-100">
                <div class="cover" style="background:linear-gradient(135deg,#c9a96a,#7a1f2b)">
                  <div class="d-flex align-items-center justify-content-center h-100 text-white"><i
                      class="bi bi-music-note-list display-3"></i></div>
                </div>
                <div class="card-body">
                  <h6 class="serif">Hymns for the Soul</h6><small class="text-muted">30 songs · 3h 20m</small>
                </div>
              </div>
            </a></div>
          <div class="col-sm-6 col-lg-3"><a href="/playlists/details" class="text-decoration-none text-reset">
              <div class="card card-music h-100">
                <div class="cover" style="background:linear-gradient(135deg,#3d1f5a,#7a1f2b)">
                  <div class="d-flex align-items-center justify-content-center h-100 text-white"><i
                      class="bi bi-music-note-list display-3"></i></div>
                </div>
                <div class="card-body">
                  <h6 class="serif">Gospel Power Hour</h6><small class="text-muted">35 songs · 4h 30m</small>
                </div>
              </div>
            </a></div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-title text-center">
          <div class="sub">From the Blog</div>
          <h2>Recent Articles</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <article class="card card-music h-100">
              <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=800" class="card-img-top" alt=""
                style="aspect-ratio:16/10;object-fit:cover">
              <div class="card-body">
                <span class="tag mb-2">Worship</span>
                <h5 class="serif mt-2">Why Worship Music Heals the Soul</h5>
                <p class="text-muted small">Discover the science and scripture behind worship.</p>
                <a href="/blog/single" class="text-ucc-primary fw-semibold text-decoration-none small">Read more <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="card card-music h-100">
              <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?w=800" class="card-img-top" alt=""
                style="aspect-ratio:16/10;object-fit:cover">
              <div class="card-body">
                <span class="tag mb-2">Ministry</span>
                <h5 class="serif mt-2">5 Hymns That Changed Church History</h5>
                <p class="text-muted small">From Wesley to Watts, hymns that shaped faith.</p>
                <a href="/blog/single" class="text-ucc-primary fw-semibold text-decoration-none small">Read more <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="card card-music h-100">
              <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=800" class="card-img-top" alt=""
                style="aspect-ratio:16/10;object-fit:cover">
              <div class="card-body">
                <span class="tag mb-2">Lifestyle</span>
                <h5 class="serif mt-2">Building a Daily Devotional Playlist</h5>
                <p class="text-muted small">A practical guide to quiet time soundtracks.</p>
                <a href="/blog/single" class="text-ucc-primary fw-semibold text-decoration-none small">Read more <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section" style="background:linear-gradient(135deg,var(--ucc-primary),var(--ucc-dark));color:#fff">
      <div class="container text-center">
        <h2 class="serif mb-3">Join Our Worship Community</h2>
        <p class="opacity-75 mb-4">Get weekly playlists, new release alerts, and exclusive ministry content.</p>
        <form class="row g-2 justify-content-center">
          <div class="col-md-5"><input type="email" class="form-control form-control-lg" placeholder="Enter your email">
          </div>
          <div class="col-auto"><button class="btn btn-ucc btn-lg px-4">Subscribe</button></div>
        </form>
      </div>
    </section>
  </main>
  <section class="section bg-ucc-cream" style="padding:3.5rem 0">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-6 col-md">
          <div class="serif fw-bold" style="font-size:2.6rem;color:var(--ucc-primary);line-height:1">8+</div>
          <div class="text-muted small mt-2 text-uppercase" style="letter-spacing:1.5px">Years Active</div>
        </div>
        <div class="col-6 col-md">
          <div class="serif fw-bold" style="font-size:2.6rem;color:var(--ucc-primary);line-height:1">50K+</div>
          <div class="text-muted small mt-2 text-uppercase" style="letter-spacing:1.5px">Songs Released</div>
        </div>
        <div class="col-6 col-md">
          <div class="serif fw-bold" style="font-size:2.6rem;color:var(--ucc-primary);line-height:1">1,200</div>
          <div class="text-muted small mt-2 text-uppercase" style="letter-spacing:1.5px">Albums</div>
        </div>
        <div class="col-6 col-md">
          <div class="serif fw-bold" style="font-size:2.6rem;color:var(--ucc-primary);line-height:1">300+</div>
          <div class="text-muted small mt-2 text-uppercase" style="letter-spacing:1.5px">Live Events</div>
        </div>
        <div class="col-12 col-md">
          <div class="serif fw-bold" style="font-size:2.6rem;color:var(--ucc-primary);line-height:1">500K+</div>
          <div class="text-muted small mt-2 text-uppercase" style="letter-spacing:1.5px">Listeners</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title text-center">
        <div class="sub">Featured Videos</div>
        <h2>Watch the Moments</h2>
      </div>
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow"><iframe
              src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Worship Live" allowfullscreen></iframe></div>
        </div>
        <div class="col-lg-6">
          <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow"><iframe
              src="https://www.youtube.com/embed/ScMzIvxBSi4" title="Official Music Video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="text-center mt-4"><a href="/gallery" class="btn btn-outline-ucc"
          style="border-color:var(--ucc-primary);color:var(--ucc-primary)">Browse Gallery <i
            class="bi bi-arrow-right"></i></a></div>
    </div>
  </section>

  <section class="section bg-ucc-cream">
    <div class="container">
      <div class="section-title text-center">
        <div class="sub">Testimonials</div>
        <h2>Voices from the Community</h2>
      </div>
      <div id="homeTestCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="text-center px-4 py-3" style="max-width:780px;margin:0 auto;"><i
                class="bi bi-quote display-3 text-ucc-gold"></i>
              <p class="lead fst-italic serif">"UCC Music Hub has transformed my devotional life — every playlist feels
                Spirit-led."</p>
              <div class="mt-3 fw-semibold">— Sarah K., Worship Leader</div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="text-center px-4 py-3" style="max-width:780px;margin:0 auto;"><i
                class="bi bi-quote display-3 text-ucc-gold"></i>
              <p class="lead fst-italic serif">"One of the most authentic worship music collections available today."
              </p>
              <div class="mt-3 fw-semibold">— Pastor Daniel R.</div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="text-center px-4 py-3" style="max-width:780px;margin:0 auto;"><i
                class="bi bi-quote display-3 text-ucc-gold"></i>
              <p class="lead fst-italic serif">"The curated playlists make Sunday mornings feel like a sanctuary at
                home."</p>
              <div class="mt-3 fw-semibold">— Mary T., Listener</div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" data-bs-target="#homeTestCarousel" data-bs-slide="prev"><span
            class="carousel-control-prev-icon" style="filter:invert(.3) sepia(1) hue-rotate(330deg)"></span></button>
        <button class="carousel-control-next" data-bs-target="#homeTestCarousel" data-bs-slide="next"><span
            class="carousel-control-next-icon" style="filter:invert(.3) sepia(1) hue-rotate(330deg)"></span></button>
      </div>
      <div class="text-center mt-4"><a href="/testimonials"
          class="text-ucc-primary fw-semibold text-decoration-none">Read all testimonials <i
            class="bi bi-arrow-right"></i></a></div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap">
        <div>
          <div class="sub text-ucc-primary fw-bold">Gallery</div>
          <h2 class="serif">Moments Captured</h2>
        </div><a href="/gallery" class="text-ucc-primary fw-semibold text-decoration-none">Full gallery <i
            class="bi bi-arrow-right"></i></a>
      </div>
      <div class="row g-3">
        <div class="col-6 col-md-3"><img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a?w=600"
            class="img-fluid rounded-3" style="aspect-ratio:1;object-fit:cover;width:100%" alt="Gallery"></div>
        <div class="col-6 col-md-3"><img src="https://images.unsplash.com/photo-1507838153414-b4b713384a76?w=600"
            class="img-fluid rounded-3" style="aspect-ratio:1;object-fit:cover;width:100%" alt="Gallery"></div>
        <div class="col-6 col-md-3"><img src="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?w=600"
            class="img-fluid rounded-3" style="aspect-ratio:1;object-fit:cover;width:100%" alt="Gallery"></div>
        <div class="col-6 col-md-3"><img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=600"
            class="img-fluid rounded-3" style="aspect-ratio:1;object-fit:cover;width:100%" alt="Gallery"></div>
      </div>
    </div>
  </section>

  <section class="section bg-ucc-dark text-white">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <div class="text-ucc-gold small fw-bold text-uppercase">Upcoming Events</div>
          <h2 class="serif mt-2">Live Worship Near You</h2>
          <p class="opacity-75 mb-0">Join thousands at concerts, worship nights, and festivals on our 2026 tour.</p>
        </div>
        <div class="col-lg-5 text-lg-end"><a href="/events" class="btn btn-ucc btn-lg me-2"><i
              class="bi bi-calendar-event me-2"></i>View Tour Dates</a><a href="/merchandise"
            class="btn btn-outline-ucc btn-lg"><i class="bi bi-bag me-2"></i>Shop Merch</a></div>
      </div>
    </div>
  </section>
@endsection
