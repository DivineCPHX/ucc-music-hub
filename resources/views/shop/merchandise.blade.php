@extends('layouts.app')
@section('title', 'Merchandise')

@section('content')
<main style="padding-top:42px">

<header class="page-header"><div class="container"><span class="badge bg-ucc-gold text-dark mb-3 px-3 py-2">Official Store</span><h1 class="serif">Merchandise &amp; Shop</h1><p class="lead opacity-75 mt-2">Wear it. Spin it. Display it. Take the message with you.</p></div></header>

<section class="section bg-ucc-cream">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3">
        <div class="card border-0 shadow-sm p-3 mb-3"><h6 class="serif">Categories</h6>
          <ul class="list-unstyled small mb-0">
            <li class="mb-2"><a class="text-ucc-primary text-decoration-none" href="#">All Products (32)</a></li>
            <li class="mb-2"><a class="text-muted text-decoration-none" href="#">Apparel (12)</a></li>
            <li class="mb-2"><a class="text-muted text-decoration-none" href="#">Music &amp; Vinyl (8)</a></li>
            <li class="mb-2"><a class="text-muted text-decoration-none" href="#">Accessories (6)</a></li>
            <li class="mb-2"><a class="text-muted text-decoration-none" href="#">Books (4)</a></li>
            <li><a class="text-muted text-decoration-none" href="#">Posters (2)</a></li>
          </ul>
        </div>
        <div class="card border-0 shadow-sm p-3"><h6 class="serif">Price Range</h6>
          <input type="range" class="form-range" min="0" max="100"><div class="d-flex justify-content-between small text-muted"><span>$0</span><span>$100+</span></div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="d-flex justify-content-between align-items-center mb-3"><small class="text-muted">Showing 8 of 32 products</small><select class="form-select w-auto"><option>Sort: Featured</option><option>Price: Low to High</option><option>Newest</option></select></div>
        <div class="row g-4">

          <div class="col-sm-6 col-lg-3"><div class="product-card h-100"><div class="position-relative"><img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=600" alt="UCC Music Classic Tee"><span class="badge bg-ucc-gold text-dark position-absolute top-0 start-0 m-2">New</span></div><div class="p-3"><span class="tag mb-2">Apparel</span><h6 class="serif mt-2 mb-1">UCC Music Classic Tee</h6><div class="d-flex justify-content-between align-items-center mt-2"><span class="price">$29.99</span><button class="btn btn-ucc btn-sm"><i class="bi bi-cart-plus"></i></button></div></div></div></div>

          <div class="col-sm-6 col-lg-3"><div class="product-card h-100"><div class="position-relative"><img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=600" alt="Worship Hoodie"><span class="badge bg-ucc-gold text-dark position-absolute top-0 start-0 m-2">New</span></div><div class="p-3"><span class="tag mb-2">Apparel</span><h6 class="serif mt-2 mb-1">Worship Hoodie</h6><div class="d-flex justify-content-between align-items-center mt-2"><span class="price">$59.99</span><button class="btn btn-ucc btn-sm"><i class="bi bi-cart-plus"></i></button></div></div></div></div>

          <div class="col-sm-6 col-lg-3"><div class="product-card h-100"><div class="position-relative"><img src="https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=600" alt="Snapback Cap"><span class="badge bg-ucc-gold text-dark position-absolute top-0 start-0 m-2">New</span></div><div class="p-3"><span class="tag mb-2">Accessories</span><h6 class="serif mt-2 mb-1">Snapback Cap</h6><div class="d-flex justify-content-between align-items-center mt-2"><span class="price">$24.99</span><button class="btn btn-ucc btn-sm"><i class="bi bi-cart-plus"></i></button></div></div></div></div>

          <div class="col-sm-6 col-lg-3"><div class="product-card h-100"><div class="position-relative"><img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600" alt="Songs of the Sanctuary Vinyl"><span class="badge bg-ucc-gold text-dark position-absolute top-0 start-0 m-2">New</span></div><div class="p-3"><span class="tag mb-2">Music</span><h6 class="serif mt-2 mb-1">Songs of the Sanctuary Vinyl</h6><div class="d-flex justify-content-between align-items-center mt-2"><span class="price">$34.99</span><button class="btn btn-ucc btn-sm"><i class="bi bi-cart-plus"></i></button></div></div></div></div>

          <div class="col-sm-6 col-lg-3"><div class="product-card h-100"><div class="position-relative"><img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Higher Ground CD"><span class="badge bg-ucc-gold text-dark position-absolute top-0 start-0 m-2">New</span></div><div class="p-3"><span class="tag mb-2">Music</span><h6 class="serif mt-2 mb-1">Higher Ground CD</h6><div class="d-flex justify-content-between align-items-center mt-2"><span class="price">$14.99</span><button class="btn btn-ucc btn-sm"><i class="bi bi-cart-plus"></i></button></div></div></div></div>

          <div class="col-sm-6 col-lg-3"><div class="product-card h-100"><div class="position-relative"><img src="https://images.unsplash.com/photo-1507838153414-b4b713384a76?w=600" alt="Concert Tour Poster"><span class="badge bg-ucc-gold text-dark position-absolute top-0 start-0 m-2">New</span></div><div class="p-3"><span class="tag mb-2">Posters</span><h6 class="serif mt-2 mb-1">Concert Tour Poster</h6><div class="d-flex justify-content-between align-items-center mt-2"><span class="price">$19.99</span><button class="btn btn-ucc btn-sm"><i class="bi bi-cart-plus"></i></button></div></div></div></div>

          <div class="col-sm-6 col-lg-3"><div class="product-card h-100"><div class="position-relative"><img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=600" alt="Devotional Journal"><span class="badge bg-ucc-gold text-dark position-absolute top-0 start-0 m-2">New</span></div><div class="p-3"><span class="tag mb-2">Books</span><h6 class="serif mt-2 mb-1">Devotional Journal</h6><div class="d-flex justify-content-between align-items-center mt-2"><span class="price">$18.50</span><button class="btn btn-ucc btn-sm"><i class="bi bi-cart-plus"></i></button></div></div></div></div>

          <div class="col-sm-6 col-lg-3"><div class="product-card h-100"><div class="position-relative"><img src="https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?w=600" alt="Worship Mug"><span class="badge bg-ucc-gold text-dark position-absolute top-0 start-0 m-2">New</span></div><div class="p-3"><span class="tag mb-2">Accessories</span><h6 class="serif mt-2 mb-1">Worship Mug</h6><div class="d-flex justify-content-between align-items-center mt-2"><span class="price">$12.99</span><button class="btn btn-ucc btn-sm"><i class="bi bi-cart-plus"></i></button></div></div></div></div>

        </div>
        <nav class="mt-5"><ul class="pagination justify-content-center"><li class="page-item"><a class="page-link text-ucc-primary" href="#">‹</a></li><li class="page-item active"><a class="page-link" style="background:var(--ucc-primary);border-color:var(--ucc-primary)">1</a></li><li class="page-item"><a class="page-link text-ucc-primary" href="#">2</a></li><li class="page-item"><a class="page-link text-ucc-primary" href="#">3</a></li><li class="page-item"><a class="page-link text-ucc-primary" href="#">›</a></li></ul></nav>
      </div>
    </div>
  </div>
</section>

<section class="section bg-ucc-dark text-white"><div class="container text-center"><h3 class="serif">Free Shipping on Orders Over $50</h3><p class="opacity-75 mb-0">Ships worldwide · 30-day returns · Secure checkout</p></div></section>

</main>
@endsection
