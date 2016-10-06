@extends("template")

@section("content")

    <table border="1">
        <thead>
            <th>Editar</th>
            <th>Excluir</th>
            <th>Título</th>
            <th>Conteúdo</th>
        </thead>
        <tbody>
            @foreach($artigos as $artigo)
                <tr>
                    <td>
                        <a href="{{ route("artigo.editar", [ "id"=>$artigo->id ]) }}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route("artigo.excluir", [ "id"=>$artigo->id ]) }}">Excluir</a>
                    </td>
                    <td>{{ $artigo->titulo }}</td>
                    <td>{!! $artigo->conteudo !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop