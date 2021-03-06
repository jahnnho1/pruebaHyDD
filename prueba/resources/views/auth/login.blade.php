@extends('layouts.app')
     @section('content')

           @extends('layouts.topBar')
   

  
        
      <!-- Login -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
        <br><br><br><br>
        
        <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-size-cover g-bg-bluegray-opacity-0_3--after" style="height: 140%; background-image: url(imgVarias/ingreso.jpg);"></div>
      <!-- End Parallax Image -->

      <div class="container g-pt-100 g-pb-20">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-5 flex-md-unordered align-self-center g-mb-80">
            <div class="g-bg-white rounded g-pa-50">
              <header class="text-center mb-4">
                <h2 class="h2 g-color-black g-font-weight-600">Iniciar sesión</h2>
                    <br> 
              </header>

              <!-- Form -->
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                                <input id="email" type="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15    form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>

                <div class="g-mb-30">
                                                 <input id="password" type="password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>


              <div class="g-mb-30">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recuerdame') }}
                                    </label>
                                </div>
                     </div>              

                <div class="text-center mb-5">

                    <button type="submit" class="btn btn-block u-btn-primary rounded g-py-13">
                                    {{ __('Ingresar') }}
                                </button>     <br>     
    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu contraseña?') }}
                                </a>

              
                </div>

                <div class="d-flex justify-content-center text-center g-mb-30 invisible">
                  <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                  <span class="align-self-center g-color-gray-dark-v5 mx-4">O</span>
                  <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                </div>

                <div class="row no-gutters g-mb-40 invisible">
                  <div class="col-6">
                    <button class="btn btn-block u-btn-facebook rounded g-px-30 g-py-13 mr-1" type="button">Facebook</button>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-block u-btn-twitter rounded g-px-30 g-py-13 ml-1" type="button">Twitter</button>
                  </div>
                </div>
              </form>
              <!-- End Form -->

              <footer class="text-center">
                <p class="g-color-gray-dark-v5 mb-0">No tienes una cuenta? <a class="g-font-weight-600" href="{{ route('register') }}">Registrate</a>
                </p>
              </footer>
            </div>
          </div>

          <div class="col-md-6 flex-md-first align-self-center g-mb-80">
            <div class="mb-5">
              <h1 class="h3 g-color-white g-font-weight-600 mb-3">Historial de cotizaciones, suscripción de nuestros nuevos productos, descuentos y mucho mas. </h1>
              <p class="g-color-white-opacity-0_8 g-font-size-12 text-uppercase">CON LA CONFIANZA DE NUESTROS USUARIOS EN TODO EL MUNDO</p>
            </div>

            <div class="row">
              <div class="col-md-11 col-lg-9">
                <!-- Icon Blocks -->
                <div class="media mb-4">
                  <div class="d-flex mr-4">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-168 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <p class="g-color-white mb-0">¡Contratos confiables, multifuncionalidad y los mejores productos, rentabilidad absoluta!!</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media mb-5">
                  <div class="d-flex mr-4">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-193 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <p class="g-color-white mb-0">Múltiples  formas de pago seguras, realza cotizaciones con nosotros.</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Testimonials -->
                <blockquote class="u-blockquote-v1 g-color-main rounded g-pl-60 g-pr-30 g-py-25 g-mb-40">No busques más, llegaste al lugar correcto. H&D ofrece todo lo que has soñado en un solo lugar.</blockquote>
                <div class="media">
                  <img class="d-flex align-self-center rounded-circle g-width-40 g-height-40 mr-3" src="{{ asset('assets/img-temp/100x100/img12.jpg')}}" alt="Image Description">
                  <div class="media-body align-self-center">
                    <h4 class="h6 g-color-primary g-font-weight-600 g-mb-0">Alex Pottorf</h4>
                    <em class="g-color-white g-font-style-normal g-font-size-12">CEO H&D</em>
                  </div>
                </div>
                <!-- End Testimonials -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
            


        @include('layouts.footer')          
       @endsection
       
       
      
     


       

       

  

   