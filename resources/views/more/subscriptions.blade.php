@extends('layouts.app')
@section('title', 'Subscriptions')

@section('content')

<main style="padding-top:42px">

<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Subscriptions</p>
    <h1 class="serif">Choose Your Plan</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">Pricing</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4"><div class="pricing-card bg-ucc-cream h-100 d-flex flex-column">

        <h3 class="serif mt-2">Free</h3>
        <div class="price mt-3">$0<small class="fs-6 fw-normal opacity-75"> Forever</small></div>
        <ul class="list-unstyled mt-4 flex-grow-1"><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Ad-supported streaming</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Limited skips</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Standard audio quality</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Web player only</li></ul>
        <button class="btn btn-ucc btn-lg mt-3">Get Started</button>
      </div></div><div class="col-md-4"><div class="pricing-card featured h-100 d-flex flex-column">
        <span class="tag" style="background:var(--ucc-gold);color:var(--ucc-dark)">Most Popular</span>
        <h3 class="serif mt-2">Premium Monthly</h3>
        <div class="price mt-3">$9.99<small class="fs-6 fw-normal opacity-75"> per month</small></div>
        <ul class="list-unstyled mt-4 flex-grow-1"><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Ad-free listening</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Unlimited skips</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>HD audio quality</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Offline downloads</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>All devices</li></ul>
        <button class="btn btn-light text-dark btn-lg mt-3">Subscribe</button>
      </div></div><div class="col-md-4"><div class="pricing-card bg-ucc-cream h-100 d-flex flex-column">

        <h3 class="serif mt-2">Premium Annual</h3>
        <div class="price mt-3">$89<small class="fs-6 fw-normal opacity-75"> per year</small></div>
        <ul class="list-unstyled mt-4 flex-grow-1"><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Everything in Premium</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>2 months free</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Exclusive concerts</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Early access releases</li><li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-gold me-2"></i>Family sharing (6)</li></ul>
        <button class="btn btn-ucc btn-lg mt-3">Subscribe & Save</button>
      </div></div>
    </div>

    <h3 class="serif text-center mt-5 mb-4">Features Comparison</h3>
    <div class="table-responsive"><table class="table table-bordered">
      <thead class="bg-ucc-cream"><tr><th>Feature</th><th class="text-center">Free</th><th class="text-center">Monthly</th><th class="text-center">Annual</th></tr></thead>
      <tbody>
      <tr><td>Ad-free</td><td class="text-center">—</td><td class="text-center text-ucc-primary fw-bold">✓</td><td class="text-center text-ucc-primary fw-bold">✓</td></tr><tr><td>Offline downloads</td><td class="text-center">—</td><td class="text-center text-ucc-primary fw-bold">✓</td><td class="text-center text-ucc-primary fw-bold">✓</td></tr><tr><td>HD audio</td><td class="text-center">—</td><td class="text-center text-ucc-primary fw-bold">✓</td><td class="text-center text-ucc-primary fw-bold">✓</td></tr><tr><td>Exclusive concerts</td><td class="text-center">—</td><td class="text-center text-ucc-primary fw-bold">—</td><td class="text-center text-ucc-primary fw-bold">✓</td></tr><tr><td>Family sharing</td><td class="text-center">—</td><td class="text-center text-ucc-primary fw-bold">—</td><td class="text-center text-ucc-primary fw-bold">✓ (6 users)</td></tr>
      </tbody>
    </table></div>

    <div class="row g-4 mt-4">
    <div class="col-md-4 text-center"><i class="bi bi-shield-check fs-1 text-ucc-primary"></i><h5 class="serif mt-2">Cancel Anytime</h5><p class="text-muted">No commitments, change plans whenever.</p></div><div class="col-md-4 text-center"><i class="bi bi-headphones fs-1 text-ucc-primary"></i><h5 class="serif mt-2">Studio Quality</h5><p class="text-muted">Crystal-clear 320kbps streaming.</p></div><div class="col-md-4 text-center"><i class="bi bi-heart fs-1 text-ucc-primary"></i><h5 class="serif mt-2">Support Ministry</h5><p class="text-muted">A portion of every subscription funds worship.</p></div>
    </div>
  </div>
</section>
</main>
@endsection
