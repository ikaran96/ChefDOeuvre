@extends('pole.layout')

@section('content')
<div class="wrapper-user-interface">
<h3 class="title-user-interface">Se connecter</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="exampleDropdownFormEmail1">E-mail</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleDropdownFormEmail1" placeholder="Email" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword1">Mot de passe</label>
            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="exampleDropdownFormPassword1" placeholder="Mot de passe"  name="password" required autocomplete="current-password" autofocus>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="dropdownCheck">
                    Se souvenir
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-bottom:20px"> {{ __('Se connecter') }}</button>
    </form>
    <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#"> S'inscrire </a>
    @if (Route::has('password.request'))
  <a class="dropdown-item" href="#"> {{ __('Mot de passe oublié') }}</a>
    @endif
</div>
    
@endsection
