@extends('layouts.app')
@section('title', 'Gallery')

@section('content')
<body>
<main style="padding-top:42px">

<header class="page-header"><div class="container"><span class="badge bg-ucc-gold text-dark mb-3 px-3 py-2">Moments</span><h1 class="serif">Photo &amp; Video Gallery</h1><p class="lead opacity-75 mt-2">Worship moments, behind-the-scenes, and live performances captured around the world.</p></div></header>

<section class="section bg-ucc-cream">
  <div class="container">
    <ul class="nav nav-pills justify-content-center mb-4 gap-2">
      <li class="nav-item"><a class="nav-link active" style="background:var(--ucc-primary);color:#fff" href="#">All</a></li>
      <li class="nav-item"><a class="nav-link text-ucc-primary" href="#">Concerts</a></li>
      <li class="nav-item"><a class="nav-link text-ucc-primary" href="#">Studio</a></li>
      <li class="nav-item"><a class="nav-link text-ucc-primary" href="#">Behind the Scenes</a></li>
      <li class="nav-item"><a class="nav-link text-ucc-primary" href="#">Worship Nights</a></li>
    </ul>
    <div class="row g-3">
<div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1501386761578-eac5c94b800a?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1507838153414-b4b713384a76?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1507838153414-b4b713384a76?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1538137524007-21e48fa42f3f?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1538137524007-21e48fa42f3f?w=900" class="gallery-img" alt="Gallery"></a></div><div class="col-6 col-md-4 col-lg-3"><a href="#imgModal" data-bs-toggle="modal" data-img="https://images.unsplash.com/photo-1519676867240-f03562e64548?w=900" onclick="document.getElementById('imgPreview').src=this.dataset.img"><img src="https://images.unsplash.com/photo-1519676867240-f03562e64548?w=900" class="gallery-img" alt="Gallery"></a></div>
    </div>
    <div class="text-center mt-5"><button class="btn btn-ucc">Load More <i class="bi bi-arrow-down"></i></button></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-title text-center"><div class="sub">Featured</div><h2>Videos</h2></div>
    <div class="row g-4">
      <div class="col-lg-6"><div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow"><iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Worship Live" allowfullscreen></iframe></div><h6 class="serif mt-3">Live at Grace Cathedral — Full Concert</h6><small class="text-muted">Bethany Hayes · 2.4M views</small></div>
      <div class="col-lg-6"><div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow"><iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" title="Music Video" allowfullscreen></iframe></div><h6 class="serif mt-3">Amazing Grace (Official Music Video)</h6><small class="text-muted">Bethany Hayes · 1.8M views</small></div>
    </div>
  </div>
</section>

<div class="modal fade" id="imgModal" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content bg-transparent border-0"><img id="imgPreview" class="img-fluid rounded-4"></div></div></div>

</main>
@endsection
