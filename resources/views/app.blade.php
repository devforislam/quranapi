<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{ isset($title) ? $title . ' - ' : null }} Enzaime CMS</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="SG Soft Studio">
	<meta name="description" content="Enzaime CMS">
	<meta name="keywords" content="Laravel, Enzaime, Laravel CMS, Enzaime CMS, sgsoft-studio">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@if (isset($canonical))
		<link rel="canonical" href="{{ url($canonical) }}" />
	@endif
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('assets/css/laravel.css') }}">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
	<link rel="apple-touch-icon" href="/favicon.ico">
</head>
<body class="@yield('body-class', 'docs') language-php">

	<span class="overlay"></span>

	<nav class="main">
		<a href="/" class="brand nav-block">
			{{--  {!! svg('laravel-logo') !!}  --}}
			<img src="/logo.png">
		</a>

        <div class="search nav-block">

        </div>

		<ul class="main-nav" v-if="! search">
			@include('partials.main-nav')
		</ul>

        @if (isset($currentVersion))
			{{--  @include('partials.switcher')  --}}
		@endif

        <div class="responsive-sidebar-nav">
			<a href="#" class="toggle-slide menu-link btn">&#9776;</a>
		</div>
	</nav>

	@yield('content')

	<footer class="main">
		<ul>
			@include('partials.main-nav')
		</ul>
		<p>Enzaime CMS is a free open source cms based on Laravel.</p>
		<p class="less-significant">
            <a href="http://enzaime.com">ENZAIME.COM</a>
        </p>
	</footer>

	<script>
		var algolia_app_id      = '<?php echo Config::get('algolia.connections.main.id', false); ?>';
		var algolia_search_key  = '<?php echo Config::get('algolia.connections.main.search_key', false); ?>';
		@if (isset($currentVersion))
		var version             = '<?php echo $currentVersion; ?>';
		@endif
	</script>

	@include('partials.algolia_template')

	<script src="{{ asset('assets/js/laravel.js') }}"></script>
	<script src="/assets/js	/viewport-units-buggyfill.js"></script>
	<script>window.viewportUnitsBuggyfill.init();</script>
	<script>
		var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
		(function(d,t){
			var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)
		}(document,'script'));
	</script>
</body>
</html>
