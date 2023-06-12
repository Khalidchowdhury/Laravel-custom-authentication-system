@extends('auth.layouts.app')
	

@section('main')
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Log in</h2>

				@include('validate')
				{{-- Login Form --}}
				<form action="{{ route('Login.page') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="">email</label>
						<input name="email" class="form-control" type="email">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password">
					</div>
					<div class="form-group mt-5">
						<input class="btn btn-primary mr-3" type="submit" value="Login Form">
						<a href="{{ route('showCreate.page') }}">Sign Up</a>
					</div>
				</form>
				{{-- Login Form --}}


			</div>
		</div>
	</div>
@endsection