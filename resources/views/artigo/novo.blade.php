@extends("template")

@section("content")

    <form method="POST" action="{{ route("artigo.novo") }}" >
        {{ csrf_field() }}
        @if(isset($artigo))
            <input type="hidden" name="id" value="{{ $artigo->id }}">
        @endif
        <div>
            <label>
                Título:
                <input type="text" name="titulo" value="{{ @$artigo->titulo }}">
            </label>
        </div>
        <div>
            <label>
                Conteúdo:
                <textarea name="conteudo">
                    {!! @$artigo->conteudo !!}
                </textarea>
            </label>
        </div>
        <div>
            <input type="submit" value="Salvar">
        </div>
    </form>

@stop


@section("footer")
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@stop