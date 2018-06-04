@extends('blog.layouts.main')
@section('content')
<section>
        <header class="main">
            <h1>Acerca de nosotros</h1>
        </header>

        <!-- Content -->
        <p>"Cosas interesantes y curiosidades" nació como una idea que llegó de casualidad, quería hacer algo por las demás personas pero que tuviera un impacto amplio y una gran manera de hacerlo era a travéz de internet. Actualmente es administrada por una sola persona, o sea yo. Soy el creador de la idea, también de la página web (ya que soy programador) y además de todo su contenido.</p>
    <p>Me dedico diariamente a subir contenido nuevo, todo con el fin de llegar a más personas y compartir historias, tips, curiosidades, etc. También soy abierto a recibir sugerencias en cuanto al contenido que comparto, ejemplo si quieres que suba algún artículo sobre un tema en particular puedes hacerlo enviándome un mensaje desde <a href="{{ route('blog.contact') }}">aquí</a></p>
            
</section>
@endsection