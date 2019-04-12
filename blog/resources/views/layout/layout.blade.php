<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/tika.css')}}"/>
<title>@yield('title')</title>
</head>
<body>
<header>
@include('layout.header')
</header>
<ul>
	@section('sidebar')
		<li>HTML</li>
		<li>CSS</li>
		<li>JS</li>
	@show
</ul>
<div class="container">
@yield('content')
</div>
</body>
</html>