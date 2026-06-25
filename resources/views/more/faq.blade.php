@extends('layouts.app')
@section('title', 'FAQ')

@section('content')
<main style="padding-top:42px">

<header class="page-header" style="margin-top:0">
  <div class="container pt-5">
    <p class="text-ucc-gold small text-uppercase mb-2" style="letter-spacing:3px">Help Center</p>
    <h1 class="serif">Frequently Asked Questions</h1>
    <nav><ol class="breadcrumb mt-3 mb-0">
      <li class="breadcrumb-item"><a href="/" class="text-ucc-gold text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active text-white-50">FAQ</li>
    </ol></nav>
  </div>
</header>
<section class="section">
  <div class="container" style="max-width:820px">
    <div class="accordion accordion-flush" id="faq">
    <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button " data-bs-toggle="collapse" data-bs-target="#f0">Is UCC Music Hub really free?</button></h2><div id="f0" class="accordion-collapse collapse show" data-bs-parent="#faq"><div class="accordion-body">Yes! Our free plan gives you ad-supported access to our entire library. Upgrade anytime for an ad-free experience.</div></div></div><div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f1">Can I download songs to listen offline?</button></h2><div id="f1" class="accordion-collapse collapse " data-bs-parent="#faq"><div class="accordion-body">Offline downloads are available on Premium Monthly and Annual plans across all devices.</div></div></div><div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f2">How are artists supported?</button></h2><div id="f2" class="accordion-collapse collapse " data-bs-parent="#faq"><div class="accordion-body">A significant portion of subscription revenue goes directly to artists and ministry partners.</div></div></div><div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f3">Can I share my account with family?</button></h2><div id="f3" class="accordion-collapse collapse " data-bs-parent="#faq"><div class="accordion-body">Yes — the Annual Premium plan supports up to 6 family members on one subscription.</div></div></div><div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f4">What audio quality do you offer?</button></h2><div id="f4" class="accordion-collapse collapse " data-bs-parent="#faq"><div class="accordion-body">Free plans stream at 128kbps. Premium streams at 320kbps HD quality.</div></div></div><div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f5">How do I cancel my subscription?</button></h2><div id="f5" class="accordion-collapse collapse " data-bs-parent="#faq"><div class="accordion-body">Cancel anytime from your Account Settings. You keep access until the end of the current billing period.</div></div></div><div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f6">Do you have a mobile app?</button></h2><div id="f6" class="accordion-collapse collapse " data-bs-parent="#faq"><div class="accordion-body">Yes! UCC Music Hub is available on iOS and Android.</div></div></div><div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f7">Can I submit my music as an artist?</button></h2><div id="f7" class="accordion-collapse collapse " data-bs-parent="#faq"><div class="accordion-body">Absolutely — visit our Artist Portal to apply.</div></div></div>
    </div>
  </div>
</section>
</main>
@endsection
