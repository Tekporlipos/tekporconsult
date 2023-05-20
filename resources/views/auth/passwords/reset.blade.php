@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }} <span class="text-danger">(NOTE: Wrong input will take you back.)</span></div>

                <div class="card-body">
                    <form method="POST" action="../password/update">
                        @csrf
<?php
use App\User;
$Users = User::where('remember_token',$id)->take(1)->get();
?>
@foreach ($Users as $item)
<input type="hidden" name="token" value="{{ $item->password }}">
@endforeach

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" minlength="8">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <span class="text-danger" id="erroe"></span>
                                <input id="password-confirm" onkeyup="check()" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" minlength="8">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function check(params) {
var pass = document.getElementById('password');
var passcom = document.getElementById('password-confirm');
var erroe = document.getElementById('erroe');
if (pass.value != passcom.value) {
    erroe.innerText = "PASSWORD DO NOT MATCH";
} else if(pass.value == passcom.value){
    erroe.innerText = "PASSWORD MATCH";
}
    }
</script>
