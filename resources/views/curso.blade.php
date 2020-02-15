@extends('layouts.app')

@section('titulo', 'Listagem de Cursos')



@section('content')
<div class="container">
<div class="row">
    <div class="col">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">DESCRIÇÃO</th>
          <th scope="col">VALOR</th>
          <th scope="col">PUBLICADO</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($registos as $registo)
            
        <tr>
        
        <td>{{$registo->id}}</td>
        <td>{{$registo->nome}}</td>
          <td>{{$registo->descricao}}</td>
          <td>{{$registo->valor}}</td>
          <td>{{$registo->publicado}}</td>
          <td><img src="{{$registo->imagem}}" alt=""/></td>
          <td></td>
          <td>
            <a class="btn btn-primary" href="">Editar</a>
            <a class ="btn btn-primary" href="">Deletar</a>
          </td>  
        </tr>
                
        @endforeach
      </tbody>
    </table>
</div>
</div>
</div>  

@endsection