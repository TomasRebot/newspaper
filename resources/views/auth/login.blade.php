
@include('backend.partials.header')
<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <div>
                <img src="{{asset('backend/img/logo.png')}}" alt="">
              </div>

                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
              <h3>Inicio de sesion </h3>

                    <input id="email" placeholder="Ingresa tu email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input placeholder="Contraseña" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              <div>
                <button type="submit" class="btn btn-login">
                        {{ __('Iniciar sesion') }}
                </button>
                <a class="reset_pass" href="javascript:void(0)">Olvidaste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Eres nuevo?
                  <a href="javascript:void(0)" class="to_register"> Crear cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                    <h1><i class="fa fa-ticket "></i> <b>T</b>eatro odeon</h1>
                    <p>©2019 All Rights Reserved. <a href="javascript:void(0)">Terminos de uso y privcidad</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

  </body>
  @include('backend.partials.scripts')

