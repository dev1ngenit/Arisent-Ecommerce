<head>

    @php
        $site = App\Models\Sites::find(1);
    @endphp

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />


    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="description" content="{{ optional($site)->site_slogan }}" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="{{ optional($site)->site_name }}" />
    <title>{{ optional($site)->site_name }}</title>

    <link rel="manifest" href="" />



    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('upload/favicon/' . optional($site)->favicon) }}" />


    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/template_one/assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/template_one/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/template_one/assets/css/responsive.css') }}" />



</head>
