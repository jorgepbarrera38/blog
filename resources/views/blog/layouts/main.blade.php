<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cosas interesantes y curiosidades</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{ asset('page/assets/css/main.css') }}" />
		@yield('css')
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120290750-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120290750-1');
</script>

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Cosas interesantes y curiosidades</strong></a>
									<ul class="icons">
										<li><a href="https://twitter.com/InteresantesCur" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/cosasinteresantesycuriosidades1" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/cosasinteresantesycuriosidades/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
                                </header>
                                @yield('content')
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Buscar" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{ route('blog.index') }}">Blog</a></li>
										<li><a href="{{ route('blog.contact') }}">Contacto</a></li>
										<li><a href="{{ route('blog.aboutus') }}">Quienes somos</a></li>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Quizás te interese</h2>
									</header>
									<div class="mini-posts">
										@foreach($posts_sidebar as $post_sidebar)
										<article>
											<a href="{{ route('blog.show', $post_sidebar->slug) }}" class="image"><img src="{{ asset($post_sidebar->imagesmall) }}" alt="" /></a>
											<p>{{ $post_sidebar->title }}</p>
										</article>
										@endforeach
									</div>
								</section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Sígueme en redes </h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('page/assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('page/assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('page/assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js') }}"></script><![endif]-->
			<script src="{{ asset('page/assets/js/main.js') }}"></script>
			@yield('scripts')

	</body>
</html>