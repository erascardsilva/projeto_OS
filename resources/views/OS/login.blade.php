
@extends('layout.baselogin')
@section('loginOS')
    <div class="login-container">
		<div class="login">
			<h1>VMI O.S.</h1>
			<form action="" method="POST">
				<label for="username">Nome de login:</label>
				<input type="text" id="username" name="username">
				<label for="password">Senha:</label>
				<input type="password" id="password" name="password">
				<input type="submit" value="Entrar">

			</form>

            <a href="{{ route ('home') }}"><button >Voltar</button></a>

		</div>

	</div>
@endsection
