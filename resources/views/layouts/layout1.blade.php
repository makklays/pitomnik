<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>

    <meta charset="utf-8" lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pitomnik</title>

    <meta name="description" content="Pitomnik" />
    <meta name="keywords" content="pitomnik, dogs, cats, tortoise" />
    <meta name="author" content="Alexander" />

    <meta property="og:title"       content="Pitomnik" />
    <meta property="og:description" content="Pitomnik for dogs, cats, tortoises" />
    <meta property="og:type"        content="website" />
    <meta property="og:url"         content="http://pitomnik.net" />
    <meta property="og:site_name"   content="pitomnik" />
    <meta property="og:image"       content="<?= config('app.url').'/img/pitomnik.png' ?>" />

    <link rel="shortcut icon" href="<?=config('app.url')?>/pitomnik-logo.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/bootstrap4/css/bootstrap.min.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/fontawesome5/css/all.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/jquery-ui.css?'.time()) }}" />

    <script type="text/javascript" src='<?=config('app.url')?>/js/jquery-3.4.0.min.js'></script>
    <script type="text/javascript" src='<?=config('app.url')?>/css/bootstrap4/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="<?=config('app.url')?>/js/jquery-ui.js"></script>
</head>
<body>
<main role="main">

    <div class="container">
        <h1>PITOMNIK</h1>

        @include('partials.flash')
        @yield('content')
    </div>

</main>
</body>
</html>
