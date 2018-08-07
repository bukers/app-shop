@extends('layouts.app')

@section('content')
  <div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">





              <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Inicio de sesión</h4>
                <div class="social-line">
                 <!--  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a> -->
                </div>
              </div>
              <p class="description text-center">Ingresa tus Datos</p>
              <div class="card-body">
               <!--  <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name...">
                </div> -->
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>         
                
                  <input id="email" type="email" placeholder="Email..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
             
                   <input id="password" placeholder="Password..." type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
              </div>
              <div class="footer text-center">
                 <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">
                                    {{ __('INGRESAR') }}
                                </button>               
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
