@extends('blog.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('toastr/css/toastr.min.css') }}">
@endsection
@section('content')
<section>
        <header class="main">
            <h1>Contacto</h1>
        </header>

        <!-- Content -->
            <h2 id="content">¿Quieres que publiquemos algo?</h2>
            <p>Si tienes alguna duda o quieres algún contenido en especial puedes pedirlo para que lo publiquemos, déjanos tu mensaje en el siguiente formulario</p>
  
        <form method="post" action="{{ route('blog.contact.store') }}">
                @include('partials.errors')
                @csrf
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="name" id="demo-name" value="{{ old('name') }}" placeholder="Tus nombres completos">
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="email" name="email" id="demo-email" value="{{ old('email') }}" placeholder="Tu correo electrónico">
                    </div>
                    <div class="12u$">
                        <textarea name="body" id="demo-message" placeholder="Escribe tu mensaje" rows="6">{{ old('body') }}</textarea>
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Enviar mensaje" class="special"></li>
                            <li><input type="reset" value="Reset"></li>
                        </ul>
                    </div>
                </div>
            </form>
</section>
@endsection
@section('scripts')
<script src="{{ asset('toastr/js/toastr.min.js') }}"></script>
       @if(session('info'))
            <script>
                toastr.success('{{ session('info') }}')
            </script>
        @endif
@endsection