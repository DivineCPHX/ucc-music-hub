<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Sign In | UCC Music Hub</title>
<meta name="description" content="Sign In page">
<meta property="og:title" content="Sign In | UCC Music Hub">
<meta property="og:description" content="Sign In page">
<meta property="og:type" content="website">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body><div class="auth-wrap"><div class="container"><div class="row justify-content-center"><div class="col-md-6 col-lg-5"><a href="/" class="d-block text-center text-decoration-none mb-4"><span class="serif fs-3 text-white"><i class="bi bi-music-note-beamed text-ucc-gold me-2"></i>UCC Music Hub</span></a><div class="auth-card">
<h3 class="serif mb-1">Welcome Back</h3>
<p class="text-muted mb-4">Sign in to continue worshipping.</p>
<form>
  <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control form-control-lg" placeholder="you@email.com"></div>
  <div class="mb-3"><label class="form-label">Password</label><input type="password" class="form-control form-control-lg" placeholder="••••••••"></div>
  <div class="d-flex justify-content-between align-items-center mb-3"><div class="form-check"><input class="form-check-input" type="checkbox" id="r"><label class="form-check-label" for="r">Remember me</label></div><a href="/forgot-password" class="text-ucc-primary text-decoration-none small">Forgot password?</a></div>
  <button class="btn btn-ucc btn-lg w-100">Sign In</button>
  <p class="text-center mt-3 mb-0 small">New here? <a href="/register" class="text-ucc-primary fw-semibold">Create an account</a></p>
</form></div></div></div></div></div>
<footer class="footer" style="display:none">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <h5 class="text-ucc-gold serif">UCC Music Hub</h5>
        <p class="small mt-3">Connecting Hearts Through Music. A worship music platform dedicated to inspiring faith and uplifting souls through Christian music from artists around the world.</p>
        <div class="mt-3">
          <a href="#" class="me-3"><i class="bi bi-facebook fs-5"></i></a>
          <a href="#" class="me-3"><i class="bi bi-instagram fs-5"></i></a>
          <a href="#" class="me-3"><i class="bi bi-youtube fs-5"></i></a>
          <a href="#" class="me-3"><i class="bi bi-spotify fs-5"></i></a>
          <a href="#" class="me-3"><i class="bi bi-twitter-x fs-5"></i></a><a href="https://music.youtube.com" target="_blank" rel="noopener" aria-label="YouTube Music"><i class="bi bi-youtube fs-5"></i><sub style="font-size:.55em;color:#c9a96a;font-weight:700;margin-left:-2px">M</sub></a>
        </div>
      </div>
      <div class="col-6 col-lg-2"><h6>Explore</h6>
        <ul class="list-unstyled small">
          <li class="mb-2"><a href="/artists">Artists</a></li>
          <li class="mb-2"><a href="/albums">Albums</a></li>
          <li class="mb-2"><a href="/songs">Songs</a></li>
          <li class="mb-2"><a href="/playlists">Playlists</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2"><h6>Genres</h6>
        <ul class="list-unstyled small">
          <li class="mb-2"><a href="/songs">Worship</a></li>
          <li class="mb-2"><a href="/songs">Gospel</a></li>
          <li class="mb-2"><a href="/songs">Hymns</a></li>
          <li class="mb-2"><a href="/songs">Contemporary</a></li>
        </ul>
      </div>
      <div class="col-lg-4"><h6>Newsletter</h6>
        <p class="small">Weekly worship inspiration delivered to your inbox.</p>
        <form class="d-flex gap-2"><input type="email" class="form-control form-control-sm" placeholder="Your email"><button class="btn btn-ucc btn-sm">Subscribe</button></form>
        <p class="small mt-3 mb-0"><i class="bi bi-envelope me-2"></i>hello@uccmusichub.com</p>
        <p class="small mb-0"><i class="bi bi-telephone me-2"></i>+1 (555) 010-2025</p>
      </div>
    </div>
    <hr class="my-4 border-secondary opacity-25">
    <div class="d-md-flex justify-content-between small">
      <div>© 2026 UCC Music Hub. All rights reserved.</div>
      <div><a href="privacy-policy.blade.php" class="me-3">Privacy</a><a href="terms.blade.php" class="me-3">Terms</a><a href="/faq">FAQ</a></div>
    </div>
  </div>
</footer>
  <script src="{{ asset('js/foot.js') }}"></script>


<script src="js/main.js"></script>
</body></html>
