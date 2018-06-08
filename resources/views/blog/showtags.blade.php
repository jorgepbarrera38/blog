@extends('blog.layouts.main')
@section('content')
	<!-- Section -->
	<section>
		<header class="major">
			<h2>Resultados para '{{ $slug }}'</h2>
		</header>
		<div class="posts">
			@foreach($posts as $post)
				<article>
					<a href="{{ route('blog.show', $post->slug) }}" class="image"><img src="{{ asset($post->imagesmall) }}" alt="" /></a>
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