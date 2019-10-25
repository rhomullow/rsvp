<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="My Chemical Romance, RSVP, Convite, THe Black Parade Is Dead" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="theme-color" content="#810202" />
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="msapplication-TileColor" content="#810202" />
	<meta name="msapplication-navbutton-color" content="#810202" />
	<meta name="apple-mobile-web-app-status-bar-style" content="translucent #810202" />
	<meta name="author" content="Ana Carolina Gomes">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" name="viewport">
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" charset="utf-8" />
	<title>@isset($title) {{ $title }} @endisset {{ config('app.name', 'Vamos Festejar Comigo?') }}</title>
</head>
<body>
	@yield('content')
</body>
</html>