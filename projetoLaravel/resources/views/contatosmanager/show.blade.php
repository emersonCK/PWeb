@extends('site.layout')
@section('content')
<div class="jumbotron">
    <h1 class="display-4">Projeto Laravel - Contatos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('contatosmanager.index') }}">Voltar</a>
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <!-- {{ $contato->nome }} -->
                {{ $contato->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conteudo:</strong>
                {{ $contato->mensagem }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Criado em:</strong>
                {{ $contato->updated_at }}
            </div>
        </div>
    </div>
</div>
@endsection