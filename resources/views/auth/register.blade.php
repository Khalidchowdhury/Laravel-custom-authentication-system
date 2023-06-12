@extends('auth.layouts.app')

@section('main')
    <div class="wrap shadow">
        <div class="card">
            <div class="card-body">
                <h2>Sign Up</h2>

                @include('validate')
                {{-- Registration Form --}}
                <form action="{{ route('create.page') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="email">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input name="phone" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Add Now">
                        <a class="ml-3" href="{{ route('showLogin.page') }}">Already Have a Account</a>
                    </div>
                </form>
                {{-- Registration Form end --}}

            </div>
        </div>
    </div>
@endsection
	
	









