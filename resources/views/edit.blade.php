@extends('principal')

@section('content')

@if(old('nome'))
<div>Usuário {{old('nome')}} editado com sucesso!</div>
@endif

 <form action="/cliente/update/" method="post">
 	{!! csrf_field() !!}
 	<input type="hidden" name="id" value="{{$cliente->id}}">
 	
 	<div class="form-group">
 		<label for="">nome</label>
 		<input type="text" name="nome"class="form-control"  placeholder="Digite o nome" value="{{$cliente->nome}}">
 	</div>
 	<div class="form-group">
 		<label for="data_de_nascimento">date de nascimento</label>
 		<input type="date" name="data_de_nascimento" value="{{$cliente->data_de_nascimento}}">
 	</div>
 	<div class="form-group">
 		<label for="estado_civil">estado_civil</label>
 		<input type="text" name="estado_civil" class="form-control" placeholder="Digite o estado civil" value="{{$cliente->estado_civil}}">
 	</div>
 	<div class="form-group">
 		<label for="telefone">telefone </label>
 		<input type="text" name="telefone" class="form-control" placeholder="Digite o telefone" value="{{$cliente->telefone}}">
 	</div>
 	<div class="form-group">
 		<label for="endereco">endereço</label>
 		<input type="text" name="endereco" placeholder="Digite o endereço" value="{{$cliente->endereco}}">
 	</div>
 	<div class="form-group">
 		<label for="usuario">usuario</label>
 		<input type="text" name="usuario" class="form-control" placeholder="Digite o seu nome de usuário" value="{{$cliente->usuario}}">
 	</div>
 	<div class="form-group">
 		<label for="senha">senha</label>
 		<input type="password" name="senha" class="form-control" placeholder="Digite sua senha" value="{{$cliente->senha}}">
 	</div>
 	<div class="form-group">
 		<label for="cpf">cpf</label>
 		<input type="text" name="cpf" class="form-control" placeholder="Digite seu cpf" value="{{$cliente->cpf}}">
 	</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
	
@endsection
