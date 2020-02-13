@extends('layouts.app')

@section('content')

    <div class="container" style="width: 620px; height: 412px; float: left; padding-left: 25px; background:#F2F3F4 ">

            <img src="{{asset('logo/unicv.png')}}" alt=""  height="75px"; width="75px"; style="margin-left: 250px;">
            <h4 style=" text-align: center;"> Faculdade de Ciência e Tecnologia</h4>
            <h4 style=" text-align: center;"> 3º Ano - Engenharia Informática e de Computadores </h4>
            <h4 style=" text-align: center;"> Gestão de Projetos Informáticos</h4>
            <h3 style=" text-align: center;">Tema - <strong>Sistema de Informação de Agro-Negócios</strong> </h3>
            <h4>Elementos do Grupo:
                <ul>
                    <li><strong>Ariana Horta</strong></li>
                    <li><strong>Hermane Lopes</strong></li>
                    <li><strong>Olivio Moreira</strong></li>
                </ul>
            </h4>
            <h4>Professor: <strong> Armindo Martins</strong></h4>

    </div>

    <div class="row justify-content-center" style="height: 1200px; width: 720px;>
        <div class="col-md-8" style="">
            <div class="container">

            <div class="card">

                <div class="card-body">

                    <div class="text-center" style="padding-left: 100px;"><img src="{{asset('logo/logo.jpg')}}"
                        class="img-fluid" alt="Responsive image"></div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                {{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <footer class="main-footer">
                                    <div class="pull-right hidden-xs" style="padding-left: 15px; padding-top: 15px;">
                                    </div>
                                    <strong>Copyright &copy; 2020 AHO</strong> Todos os direitos reservados.
                                  </footer>

                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>



    </div>
</div>
@endsection
