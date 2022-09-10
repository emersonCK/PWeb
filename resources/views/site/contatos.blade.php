@extends('site.master.layout')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Contatos</h1>
    <hr class="my-4">
    <p class="lead">Nossa equipe está sempre a disposição para ouvir as suas críticas e sugestões. Entre em contato que iremos responder o mais breve posível.</p>
</div>

<div class="container">
    <form method="GET">
        @csrf
        <div class="form-group">
          <label for="emailContato">Email:</label>
          <input type="email" class="form-control" id="emailContato" name="emailContato" placeholder="nome@email.com">
        </div>
        <div class="form-group">
          <label for="tipoContato">Tipo de contato:</label>
          <select class="form-control" id="tipoContato" name="tipoContato">
            <option value="Sugestão">Sugestão</option>
            <option value="Crítica">Crítica</option>
            <option value="Elogio">Elogio</option>
            <option value="Dúvida">Dúvida</option>
          </select>
        </div>
        <div class="form-group">
          <label for="mensagemContato">Mensagem:</label>
          <textarea class="form-control" id="mensagemContato" name="mensagemContato" rows="3"></textarea>
          <button type="submit" class="btn btn-primary mt-2">Enviar</button>
        </div>
    </form>
</div>
<hr>
<div class="container">
    @if ($email)
    <p>Email: {{ $email }}</p>
    <p>Tipo Contato: {{ $tipo }}</p>
    <p>Mensagem: {{ $mensagem }}</p>
    @endif
</div>
@endsection