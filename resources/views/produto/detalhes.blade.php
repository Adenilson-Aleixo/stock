@extends('layout.principal')

@section('conteudo')
    <div class="container">
      <h1>Detalhes do produto {{$p->nome}}</h1>
      <table class="table table-striped table-bordered table-hover"> 
        <tr>
          <td>{{$p->valor}}</td>
          <td>{{$p->descricao}}</td>
          <td>{{$p->quantidade}}</td>        
        </tr>
        </tr>
      </table>
    </div>
@stop