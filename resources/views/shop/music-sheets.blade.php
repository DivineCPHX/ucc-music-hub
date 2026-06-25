@extends('layouts.app')
@section('title', 'Shop · Sheet Music & MIDI')

@section('content')
<body>
<main style="padding-top:42px">

<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Worship Resources</p>
    <h1 class="serif">Shop · Sheet Music, MIDI & More</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Shop</li>
    </ol></nav>
  </div>
</header>

<section class="section">
  <div class="container">
    <div class="row g-4">
      <aside class="col-lg-3">
        <div class="bg-ucc-cream rounded-4 p-4 sticky-top" style="top:90px">
          <h6 class="text-ucc-primary text-uppercase fw-bold mb-3">Categories</h6>
          <div class="list-group list-group-flush bg-transparent">
            <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 px-0 py-2 active text-ucc-primary fw-semibold">All Products <span class="badge bg-ucc-primary float-end">128</span></a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 px-0 py-2">Sheet Music <span class="text-muted float-end small">52</span></a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 px-0 py-2">MIDI Files <span class="text-muted float-end small">34</span></a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 px-0 py-2">Chord Charts <span class="text-muted float-end small">21</span></a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 px-0 py-2">Multitracks <span class="text-muted float-end small">15</span></a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 px-0 py-2">Hymnals <span class="text-muted float-end small">6</span></a>
          </div>
          <hr>
          <h6 class="text-ucc-primary text-uppercase fw-bold mb-3 mt-3">Filter by Price</h6>
          <input type="range" class="form-range" min="0" max="100" value="50">
          <div class="d-flex justify-content-between small text-muted"><span>$0</span><span>$100</span></div>
          <hr>
          <h6 class="text-ucc-primary text-uppercase fw-bold mb-3 mt-3">Format</h6>
          <div class="form-check"><input class="form-check-input" type="checkbox" checked><label class="form-check-label">PDF</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">MIDI (.mid)</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">MusicXML</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">WAV / Stems</label></div>
        </div>
      </aside>
      <div class="col-lg-9">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
          <div class="input-group" style="max-width:380px"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input class="form-control" placeholder="Search sheet music, MIDI..."></div>
          <select class="form-select w-auto"><option>Sort: Featured</option><option>Newest</option><option>Price: Low to High</option><option>Price: High to Low</option><option>Best Selling</option></select>
        </div>

        <div class="row g-4">
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1507838153414-b4b713384a76?w=600" alt="Amazing Grace — Piano Sheet"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">PDF</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">Sheet Music</small>
                <h6 class="serif mt-1 mb-2">Amazing Grace — Piano Sheet</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$7.99</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1465821185615-20b3c2fbf41b?w=600" alt="How Great Thou Art — MIDI"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">MIDI</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">MIDI File</small>
                <h6 class="serif mt-1 mb-2">How Great Thou Art — MIDI</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$4.99</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600" alt="Goodness of God — Chord Chart"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">PDF</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">Chord Chart</small>
                <h6 class="serif mt-1 mb-2">Goodness of God — Chord Chart</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$3.49</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?w=600" alt="Holy Spirit Move — Multitrack"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">WAV</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">Multitracks</small>
                <h6 class="serif mt-1 mb-2">Holy Spirit Move — Multitrack</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$19.99</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?w=600" alt="Hymn Collection Vol. 1"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">PDF</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">Hymnal</small>
                <h6 class="serif mt-1 mb-2">Hymn Collection Vol. 1</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$24.99</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Old Rugged Cross — SATB Score"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">PDF</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">Sheet Music</small>
                <h6 class="serif mt-1 mb-2">Old Rugged Cross — SATB Score</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$9.99</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600" alt="Blessed Assurance — MIDI Pack"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">MIDI</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">MIDI File</small>
                <h6 class="serif mt-1 mb-2">Blessed Assurance — MIDI Pack</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$5.99</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600" alt="Worship Pad Loops Vol. 3"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">WAV</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">Multitracks</small>
                <h6 class="serif mt-1 mb-2">Worship Pad Loops Vol. 3</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$14.99</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="card card-music h-100">
              <div class="cover position-relative"><img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?w=600" alt="Sanctuary — Choir Arrangement"><span class="badge badge-ucc position-absolute top-0 start-0 m-2">PDF</span></div>
              <div class="card-body">
                <small class="text-muted text-uppercase" style="letter-spacing:1px;font-size:.7rem">Sheet Music</small>
                <h6 class="serif mt-1 mb-2">Sanctuary — Choir Arrangement</h6>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price" style="font-size:1.3rem">$11.49</span>
                  <button class="btn btn-sm btn-ucc"><i class="bi bi-cart-plus me-1"></i>Add</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <nav class="mt-5"><ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link">Previous</a></li>
          <li class="page-item active"><a class="page-link">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul></nav>
      </div>
    </div>
  </div>
</section>

<section class="bg-ucc-cream py-5">
  <div class="container text-center">
    <h3 class="serif">Need a custom arrangement?</h3>
    <p class="text-muted mb-4">Our team prepares custom keys, transpositions, and orchestrations for your ministry.</p>
    <a href="/contact" class="btn btn-ucc btn-lg"><i class="bi bi-pencil-square me-2"></i>Request a Custom Score</a>
  </div>
</section>
</main>
@endsection
