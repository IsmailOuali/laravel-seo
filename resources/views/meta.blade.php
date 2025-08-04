<!-- SEO Meta -->
<title>{{ $meta['title'] }}</title>
<meta name="description" content="{{ $meta['description'] }}">
<link rel="canonical" href="{{ $meta['canonical'] }}">

<!-- Open Graph -->
<meta property="og:title" content="{{ $meta['title'] }}">
<meta property="og:description" content="{{ $meta['description'] }}">
<meta property="og:url" content="{{ $meta['canonical'] }}">
<meta property="og:image" content="{{ $meta['image'] }}">
<meta property="og:type" content="website">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $meta['title'] }}">
<meta name="twitter:description" content="{{ $meta['description'] }}">
<meta name="twitter:image" content="{{ $meta['image'] }}">
