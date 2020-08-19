@extends('pole.layout')
@section('content')
<div class="wrapper-user-interface register-interface">
    <h3 class="title-user-interface">S'inscrire</h3>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="exampleDropdownFormEmail1">Pseudo</label>
            <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormEmail1">E-mail</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleDropdownFormEmail1"
                placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword1">Mot de passe</label>
            <input type="password" class="form-control  @error('password') is-invalid @enderror"
                id="exampleDropdownFormPassword1" placeholder="Mot de passe" name="password" required
                autocomplete="current-password" autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirmez votre mot de passe</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-primary" style="margin-bottom:20px"> {{ __("S'inscrire") }}</button>
    </form>
    <div class="dropdown-divider"></div>
</div>
@endsection





