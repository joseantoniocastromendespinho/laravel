@extends('layouts.app')

@section('titulo', 'Listagem de Cursos')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="row">
    <div class="col">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME:</th>
      <th scope="col">DESCRIÇÃO:</th>
      <th scope="col">VALOR:</th>
      <th scope="col">PUBLICADO:</th>

    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
  </tbody>
</table>
</div>
</div>  

@endsection