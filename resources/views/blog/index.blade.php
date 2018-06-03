@extends('blog.layouts.main')
@section('content')
	<!-- Banner -->
	<section id="banner">
		<div class="content">
			<header>
				<h1>Bienvenido</h1>
				<p>A cosas interesantes y curiosidades</p>
			</header>
			<p>Aquí encontrarás de todo, quédate todo el tiempo que quieras :D, aprende muchas cosas, desde herramientas y tips para hacerte la vida más fácil, hasta conocer a cerca de las curiosidades del mundo que nos rodea. Espero que tu estadía en esta web sea larga y placentera y sobre todo que encuentres todo lo que necesitas, Buen dia.</p>
			<ul class="actions">
				<li><a href="#" class="button big">Learn More</a></li>
			</ul>
		</div>
		<span class="image object">
			<img src="{{ asset('page/images/pic10.jpg') }}" alt="" />
		</span>
	</section>

	<!-- Section -->
	<section>
		<header class="major">
			<h2>Lo más destacado</h2>
		</header>
		<div class="features">
			<article>
				<span class="icon fa-diamond"></span>
				<div class="content">
					<h3>Portitor ullamcorper</h3>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				</div>
			</article>
			<article>
				<span class="icon fa-paper-plane"></span>
				<div class="content">
					<h3>Sapien veroeros</h3>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				</div>
			</article>
			<article>
				<span class="icon fa-rocket"></span>
				<div class="content">
					<h3>Quam lorem ipsum</h3>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				</div>
			</article>
			<article>
				<span class="icon fa-signal"></span>
				<div class="content">
					<h3>Sed magna finibus</h3>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				</div>
			</article>
		</div>
	</section>

	<!-- Section -->
	<section>
		<header class="major">
			<h2>Todos los artículos</h2>
		</header>
		<div class="posts">
			@foreach($posts as $post)
				<article>
					<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
					<h3>{{ $post->title }}</h3>
					<p>{{ $post->excerpt }}</p>
					<ul class="actions">
						<li><a href="{{ route('blog.show', $post->slug) }}" class="button">Leer más</a></li>
					</ul>
				</article>
			@endforeach
		</div>
	</section>
@endsection