<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Multi Tenant">
    <link rel="shortcut icon" href="{{ url('images/logo.png') }}">
    <title>@stack('title')</title>
    <link rel="stylesheet" href="{{ url('assets/css/dashlite.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/skins/theme-'.Session::get('theme.primary_skin').'.css') }}">
    @stack('head')
</head>
