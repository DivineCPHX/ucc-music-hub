@extends('layouts.app')
@section('title', 'Events & Booking')

@section('content')
<main style="padding-top:42px">

<header class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-ucc-gold text-dark mb-3 px-3 py-2">Live & In Person</span>
                <h1 class="serif">Events &amp; Booking</h1>
                <p class="lead opacity-75 mt-2">Join us in worship at upcoming concerts, festivals, and tour stops — or book our artists for your event.</p>
            </div>
        </div>
    </div>
</header>

<section class="section bg-ucc-cream">
  <div class="container">
    <div class="section-title text-center"><div class="sub">{{ $eventPage->page_sm_tag }}</div><h2>{{ $eventPage->page_hd_tag }} {{ $eventPage->current_year }}</h2></div>
    <div class="row g-4">
        @foreach($events as $event)
      <div class="col-lg-6">
        <div class="event-card d-flex gap-3 h-100">
            <div class="event-date">
                <div class="d">{{ str_pad($event->day, 2, '0', STR_PAD_LEFT) }}</div>
                <small class="text-uppercase">{{ \Carbon\Carbon::create()->month($event->month)->format('M') }}</small>
            </div>
            <div class="flex-grow-1">
            <span class="tag mb-2">{{ $event->eventType->name }}</span>
            <h5 class="serif mt-2 mb-1">{{ $event->name }}</h5>
            <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill text-ucc-primary me-1"></i>{{ $event->venue }}, {{ $event->location }}</p>
            <p class="text-muted small mb-3">
                <i class="bi bi-clock me-1"></i>{{ \Carbon\Carbon::parse($event->time)->format('g:i A') }} ·
                @if($event->ticketTypes->isNotEmpty())
                    · <i class="bi bi-ticket-perforated ms-2 me-1"></i>From ${{ number_format($event->ticketTypes->min('price'), 0) }}
                @endif
            </p>
            <button class="btn btn-ucc btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal" data-event-id="{{ $event->id }}><i class="bi bi-ticket-detailed me-1"></i>Get Tickets</button>
            <a href="#" class="btn btn-outline-ucc btn-sm">Details</a>
            </div>
        </div>
      </div>
      @endforeach

      {{-- <div class="col-lg-6"><div class="event-card d-flex gap-3 h-100">
        <div class="event-date"><div class="d">02</div><small class="text-uppercase">Jul</small></div>
        <div class="flex-grow-1">
          <span class="tag mb-2">Festival</span>
          <h5 class="serif mt-2 mb-1">Sounds of Faith Festival</h5>
          <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill text-ucc-primary me-1"></i>Centennial Park, Atlanta GA</p>
          <p class="text-muted small mb-3"><i class="bi bi-clock me-1"></i>12:00 PM · <i class="bi bi-ticket-perforated ms-2 me-1"></i>From $45</p>
          <button class="btn btn-ucc btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal"><i class="bi bi-ticket-detailed me-1"></i>Get Tickets</button>
          <a href="#" class="btn btn-outline-ucc btn-sm">Details</a>
        </div></div></div>

      <div class="col-lg-6"><div class="event-card d-flex gap-3 h-100">
        <div class="event-date"><div class="d">15</div><small class="text-uppercase">Aug</small></div>
        <div class="flex-grow-1">
          <span class="tag mb-2">Tour</span>
          <h5 class="serif mt-2 mb-1">Higher Ground World Tour</h5>
          <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill text-ucc-primary me-1"></i>O2 Arena, London UK</p>
          <p class="text-muted small mb-3"><i class="bi bi-clock me-1"></i>8:00 PM · <i class="bi bi-ticket-perforated ms-2 me-1"></i>From $60</p>
          <button class="btn btn-ucc btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal"><i class="bi bi-ticket-detailed me-1"></i>Get Tickets</button>
          <a href="#" class="btn btn-outline-ucc btn-sm">Details</a>
        </div></div></div>

      <div class="col-lg-6"><div class="event-card d-flex gap-3 h-100">
        <div class="event-date"><div class="d">09</div><small class="text-uppercase">Sep</small></div>
        <div class="flex-grow-1">
          <span class="tag mb-2">Acoustic</span>
          <h5 class="serif mt-2 mb-1">An Evening with Grace Carter</h5>
          <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill text-ucc-primary me-1"></i>First Baptist, Dallas TX</p>
          <p class="text-muted small mb-3"><i class="bi bi-clock me-1"></i>7:00 PM · <i class="bi bi-ticket-perforated ms-2 me-1"></i>From $20</p>
          <button class="btn btn-ucc btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal"><i class="bi bi-ticket-detailed me-1"></i>Get Tickets</button>
          <a href="#" class="btn btn-outline-ucc btn-sm">Details</a>
        </div></div></div>

      <div class="col-lg-6"><div class="event-card d-flex gap-3 h-100">
        <div class="event-date"><div class="d">21</div><small class="text-uppercase">Oct</small></div>
        <div class="flex-grow-1">
          <span class="tag mb-2">Worship Night</span>
          <h5 class="serif mt-2 mb-1">Hallelujah Live</h5>
          <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill text-ucc-primary me-1"></i>Madison Square Garden, NYC</p>
          <p class="text-muted small mb-3"><i class="bi bi-clock me-1"></i>8:30 PM · <i class="bi bi-ticket-perforated ms-2 me-1"></i>From $75</p>
          <button class="btn btn-ucc btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal"><i class="bi bi-ticket-detailed me-1"></i>Get Tickets</button>
          <a href="#" class="btn btn-outline-ucc btn-sm">Details</a>
        </div></div></div>

      <div class="col-lg-6"><div class="event-card d-flex gap-3 h-100">
        <div class="event-date"><div class="d">14</div><small class="text-uppercase">Nov</small></div>
        <div class="flex-grow-1">
          <span class="tag mb-2">Conference</span>
          <h5 class="serif mt-2 mb-1">Awaken Worship Conference</h5>
          <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill text-ucc-primary me-1"></i>Crystal Cathedral, LA CA</p>
          <p class="text-muted small mb-3"><i class="bi bi-clock me-1"></i>All Day · <i class="bi bi-ticket-perforated ms-2 me-1"></i>From $99</p>
          <button class="btn btn-ucc btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal"><i class="bi bi-ticket-detailed me-1"></i>Get Tickets</button>
          <a href="#" class="btn btn-outline-ucc btn-sm">Details</a>
        </div></div></div> --}}

    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <span class="sub text-ucc-primary fw-bold">For Promoters &amp; Churches</span>
        <h2 class="serif mt-2">Book Our Artists</h2>
        <p class="text-muted">Bring an unforgettable worship experience to your church, conference, or festival. Our artists are available for solo performances, full-band concerts, intimate worship nights, and ministry events worldwide.</p>
        <ul class="list-unstyled mt-3">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-primary me-2"></i>Full production &amp; technical rider provided</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-primary me-2"></i>Custom setlists tailored to your event</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-primary me-2"></i>International travel available</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-ucc-primary me-2"></i>Meet &amp; greet options for VIP packages</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm p-4">
          <h5 class="serif mb-3">Booking Request</h5>
          <form onsubmit="event.preventDefault();alert('Booking request sent!');this.reset();" class="row g-3">
            <div class="col-md-6"><label class="form-label small">Full Name</label><input class="form-control" required></div>
            <div class="col-md-6"><label class="form-label small">Email</label><input type="email" class="form-control" required></div>
            <div class="col-md-6"><label class="form-label small">Organization</label><input class="form-control"></div>
            <div class="col-md-6"><label class="form-label small">Event Date</label><input type="date" class="form-control" required></div>
            <div class="col-md-6"><label class="form-label small">Event Type</label><select class="form-select"><option>Church Service</option><option>Concert</option><option>Festival</option><option>Conference</option><option>Private Event</option></select></div>
            <div class="col-md-6"><label class="form-label small">Expected Attendance</label><select class="form-select"><option>Under 200</option><option>200–500</option><option>500–2,000</option><option>2,000+</option></select></div>
            <div class="col-12"><label class="form-label small">Tell us about your event</label><textarea class="form-control" rows="4" required></textarea></div>
            <div class="col-12"><button class="btn btn-ucc w-100"><i class="bi bi-send me-2"></i>Submit Booking Request</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="bookModal" tabindex="-1"><div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title serif">Reserve Tickets</h5><button class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><form onsubmit="event.preventDefault();alert('Tickets reserved!');"><div class="mb-3"><label class="form-label">Name</label><input class="form-control" required></div><div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control" required></div><div class="row g-2"><div class="col-6"><label class="form-label">Ticket Type</label><select class="form-select"><option>General Admission</option><option>VIP</option><option>Premium</option></select></div><div class="col-6"><label class="form-label">Quantity</label><input type="number" class="form-control" value="2" min="1" max="10"></div></div><button class="btn btn-ucc w-100 mt-3">Confirm Reservation</button></form></div></div></div></div>

</main>
@endsection
