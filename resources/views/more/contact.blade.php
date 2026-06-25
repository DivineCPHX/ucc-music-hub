@extends('layouts.app')
@section('title', 'Contact')

@section('content')

<main style="padding-top:42px">

<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">We are here to help</p>
    <h1 class="serif">Contact Us</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Contact</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-7">
        <h3 class="serif">Send a Message</h3>
        <form class="row g-3 mt-2">
          <div class="col-md-6"><label class="form-label">Full Name</label><input class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Email</label><input type="email" class="form-control"></div>
          <div class="col-12"><label class="form-label">Subject</label><input class="form-control"></div>
          <div class="col-12"><label class="form-label">Message</label><textarea class="form-control" rows="5"></textarea></div>
          <div class="col-12"><button class="btn btn-ucc btn-lg">Send Message</button></div>
        </form>
      </div>
      <div class="col-lg-5">
        <div class="bg-ucc-cream p-4 rounded-4 mb-4">
          <h6 class="text-ucc-primary text-uppercase fw-bold">Get in Touch</h6>
          <p class="mt-3 mb-2"><i class="bi bi-geo-alt text-ucc-primary me-2"></i>123 Worship Lane, Nashville, TN 37201</p>
          <p class="mb-2"><i class="bi bi-envelope text-ucc-primary me-2"></i>hello@uccmusichub.com</p>
          <p class="mb-2"><i class="bi bi-telephone text-ucc-primary me-2"></i>+1 (555) 010-2025</p>
          <p class="mb-3"><i class="bi bi-clock text-ucc-primary me-2"></i>Mon–Fri, 9am–6pm CT</p>
          <div class="fs-4"><a href="#" class="text-ucc-primary me-3"><i class="bi bi-facebook"></i></a><a href="#" class="text-ucc-primary me-3"><i class="bi bi-instagram"></i></a><a href="#" class="text-ucc-primary me-3"><i class="bi bi-youtube"></i></a><a href="#" class="text-ucc-primary"><i class="bi bi-twitter-x"></i></a></div>
        </div>
        <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow-sm"><iframe src="https://www.google.com/maps?q=Nashville,TN&output=embed" style="border:0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="UCC Music Hub Location"></iframe></div>
      </div>
    </div>
  </div>
</section>
</main>

@endsection
