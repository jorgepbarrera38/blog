@extends('blog.layouts.main')
@section('content')
	<!-- Banner -->
	<section id="banner">
		<div class="content">
			<header>
				<h1>Bienvenido</h1>
				<p>A cosas interesantes y curiosidades</p>
			</header>
			<p>Aquí encontrarás de todo, quédate todo el tiempo que quieras :D, aprende muchas cosas, desde herramientas y tips para hacerte la vida más fácil, hasta conocer a cerca de las curiosidades del mundo que nos rodea. Espero que tu estadía en esta web sea larga y placentera y sobre todo que encuentres todo lo que necesitas, buen dia.</p>
		</div>
		<span class="image object">
			<img src="{{ secure_asset('page/images/pic10.jpg') }}" alt="" />
		</span>
	</section>

	<!-- Section articulo destacado-->
	@if($outstanding)
		<section>
			<header class="major">
				<h2>Artículo estacado</h2>
			</header>

			<h2>{{ $outstanding->title }}</h2>
			<p>{!! substr($outstanding->body, 0, 380) !!}...</p>
			<ul class="actions">
				<li><a href="{{ route('blog.show', $outstanding->slug) }}" class="button">Leer más</a></li>
			</ul>
		</section>
	@endif

	<!-- Section -->
	<section>
		<header class="major">
			<h2>Todos los artículos</h2>
		</header>
		<div class="posts">
			@foreach($posts as $post)
				<article>
					<a href="{{ route('blog.show', $post->slug) }}" class="image"><img src="{{ secure_asset($post->imagesmall) }}" alt="" /></a>
					<h3>{{ $post->title }}</h3>
					<p>{{ $post->excerpt }}</p>
					<ul class="actions">
						<li><a href="{{ route('blog.show', $post->slug) }}" class="button">Leer más</a></li>
					</ul>
				</article>
			@endforeach
		</div><br><br>
		<center>{{ $posts->render('pagination.default') }}</center>
	</section>
@endsection