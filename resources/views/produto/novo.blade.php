@extends('layout.principal')

@section('conteudo')
  <h1>Novo produto</h1>
  <form method="POST" action="/produtos/adiciona">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control">          
    </div>
    <div class="form-group">
      <label for="valor">Valor</label>
      <input type="text" name="valor" class="form-control">          
    </div>
    <div class="form-group">
      <label for="quantidade">Quantidade</label>
      <input type="text" name="quantidade" class="form-control">          
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" name="descricao" class="form-control">          
    </div>       
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@stop