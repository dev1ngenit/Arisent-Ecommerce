<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="title" content="{{ optional($site)->site_name ?: config('app.name', 'Arisent Trade') }}" />
    <meta name="description" content="{{ optional($site)->site_slogan ?: config('app.name') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:title" content="{{ optional($site)->site_name ?: config('app.name', 'Arisent Trade') }}" />
    <meta property="og:description" content="{{ optional($site)->site_slogan ?: config('app.name') }}" />
    <meta property="og:image" content="{{ asset('upload/logo_black/' . optional($site)->logo_black) }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ config('app.url') }}" />
    <meta property="twitter:title" content="{{ optional($site)->site_name ?: config('app.name', 'Arisent Trade') }}" />
    <meta property="twitter:description" content="{{ optional($site)->site_slogan ?: config('app.name') }}" />
    <meta property="twitter:image" content="{{ asset('upload/logo_black/' . optional($site)->logo_black) }}" />

    <link href="{{ asset('upload/favicon/' . optional($site)->favicon) }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('upload/favicon/' . optional($site)->favicon) }}" rel="shortcut icon" type="image/png">
    <link rel="manifest" href="{{ asset('upload/favicon/' . optional($site)->favicon) }}" />

    <title>
        {{ optional($site)->site_name ? optional($site)->site_name : config('app.name', 'BioMac Lab') }}
    </title>




    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/template_one/assets/css/meanmenu.css?v=' . time()) }}" />
    <link rel="stylesheet" href="{{ asset('frontend/template_one/assets/css/style.css?v=' . time()) }}" />
    <link rel="stylesheet" href="{{ asset('frontend/template_one/assets/css/responsive.css?v=' . time()) }}" />
    <link rel="stylesheet" href="{{ asset('frontend/template_one/assets/css/default.css?v=' . time()) }}" />



</head>
