@extends("template")

@section("content")
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endif

        <div class="content">
            <a href="{{ route("artigo.novo") }}">Novo Artigo</a>
            <a href="{{ route("artigo.listar") }}">Listar Artigo</a>
        </div>
    </div>
@stop