<link rel="icon" type="image/png" sizes="32x32" href="{{ Voyager::image(setting('admin.icon_image')) }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ Voyager::image(setting('admin.icon_image')) }}">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<link rel="canonical" href="{{ $url }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:url" content="{{ $url }}">

<meta name="twitter:card" content="{{ $image }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">

<script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Service",
          "name": "Website Development Service",
          "image": "{{ $image }}",
          "description": "{{ $description }}",
          "sku": "",
          "brand": {
            "@type": "Brand",
            "name": "iCommerce"
          }
        }
    </script>
