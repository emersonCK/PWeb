@extends('site.layout')
@section('content')
<div class="jumbotron">
    <h1 class="display-4">Projeto Laravel - Contatos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success" href="{{ route('site.contatos') }}">Enviar Mensagem</a>
    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Conteudo</th>
            <th>Data</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($contatos as $contato)
            <tr class="col-6">
                @if ($contato->status == 0)
                    <td><strong>{{ ++$i }}</strong></td>
                    <td><strong>{{ $contato->nome}}</strong></td>
                    <td><strong>{{ $contato->mensagem}}</strong></td>
                    <td><strong>{{ $contato->created_at}}</strong></td>
                @else 
                    <td>{{ ++$i }}</td>
                    <td>{{ $contato->nome}}</td>
                    <td>{{ $contato->mensagem}}</td>
                    <td>{{ $contato->created_at}}</td>
                @endif
                <td>
                    <form action="{{ route('contatosmanager.destroy', $contato->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('contatosmanager.show', $contato->id) }}" value="Exibir">Exibir</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $contatos->links() !!}
</div>
@endsection