@extends('principal')

@section('content')

<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data De Nascimento</th>
			<th>Estado Civil</th>
			<th>Telefone</th>
			<th>Endereco</th>
			<th>Usuario</th>
			<th>CPF</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($clientes as $cliente)
			<tr>	
				<td>{{ $cliente->nome }}</td>
				<td>{{ $cliente->data_de_nascimento }}</td>
				<td>{{ $cliente->estado_civil }}</td>
				<td>{{ $cliente->telefone }}</td>
				<td>{{ $cliente->endereco }}</td>
				<td>{{ $cliente->usuario }}</td>
				<td>{{ $cliente->cpf }}</td>
				<td><a href="/cliente/edit/{{$cliente->id}}" class="btn btn-primary">Editar</td>
				<td><a href="/cliente/delete/{{$cliente->id}}" class="btn btn-danger">Deletar</td>
			</tr>
		@endforeach
	</tbody>
</table>