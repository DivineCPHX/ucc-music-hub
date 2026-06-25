<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  {{-- <title>Home | UCC Music Hub</title> --}}
  <title>@yield('title', 'UCC Music Hub')</title>
  <meta name="description"
    content="Worship music, hymns, and gospel on UCC Music Hub.">
  <meta property="og:title" content="Home | UCC Music Hub">
  <meta property="og:description"
    content="Worship music, hymns, and gospel on UCC Music Hub.">
  <meta property="og:type" content="website">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  {{-- Nav bar --}}
  @include('blade.nav')

  {{-- Contents --}}
  @yield('content')

  {{-- Footer --}}
  @include('blade.footer')
  <script src="{{ asset('js/foot.js') }}"></script>
  <script src="js/main.js"></script>
</body>

</html>
