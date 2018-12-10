@extends('principal')

@section('content')

<form>
	{!! csrf_field() !!}
	<input type="text" name="nome" placeholder="Digite o nome">
	<label for="data_de_nascimento">Data de Nascimento</label>
	<input type="date" name="data_de_nascimento">
	<input type="text" name="estado_civil" placeholder="Digite o estado civil">
	<input type="text" name="telefone" placeholder="Digite o telefone">
	<input type="text" name="endereco" placeholder="Digite o endereço">
	<input type="text" name="usuario" placeholder="Digite o seu nome de usuário">
	<input type="password" name="senha" placeholder="Digite sua senha">
	<input type="text" name="cpf" placeholder="Digite seu cpf">
	<button type="submit">Enviar</button>

</form>

@endsection