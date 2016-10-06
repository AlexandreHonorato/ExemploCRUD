@extends("template")

@section("content")
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div class="content">
            <a href="{{ route("artigo.novo") }}">Novo Artigo</a>
            <a href="{{ route("artigo.listar") }}">Listar Artigo</a>
        </div>
    </div>
@stop