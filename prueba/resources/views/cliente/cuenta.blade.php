 @extends('layouts.app')
     @section('content')

           @extends('layouts.topBar')
   
<br><br><br><br><br><br><br><br>


 <section class="g-mb-100">
      <div class="container">
        <div class="row">
          <!-- Profile Sidebar -->
          <div class="col-lg-3 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{ Auth::user()->imgUser() }}" alt="Image Description">
              </figure>

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                  <!-- Figure Social Icons -->
 
                </div>
              </figcaption>
              <!-- End Figure Caption -->

              <!-- User Info -->
              <span class="g-pos-abs g-top-20 g-left-0">
                  <a class="btn btn-sm u-btn-primary rounded-0" href="#!">{{ Auth::user()->name }} {{ Auth::user()->usu_apellido }}</a>
                  <small class="d-block g-bg-black g-color-white g-pa-5">{{ Auth::user()->email }}</small>
                </span>
              <!-- End User Info -->
            </div>
            <!-- User Image -->

            <!-- Sidebar Navigation -->
            <div class="list-group list-group-border-0 g-mb-40">
              <!-- Overall -->
  

              <!-- History -->
              <a href="page-profile-history-1.html" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-fire g-pos-rel g-top-1 g-mr-8"></i> Cotizaciones</span>
              </a>
              <!-- End History -->

              <!-- Settings -->
              <a href="{{url('/MiCuenta')}}" class="list-group-item justify-content-between active">
                <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Configuracion Cuenta</span>               
              </a>
              <!-- End Settings -->
            </div>
            <!-- End Sidebar Navigation -->

          
            <!-- End Project Progress -->
          </div>
          <!-- End Profile Sidebar -->

          <!-- Profle Content -->
          <div class="col-lg-9">
            <!-- Nav tabs -->
            <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
              <li class="nav-item">
                <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--2" role="tab">Opciones de seguridad</a>
              </li>
            
              <li class="nav-item g-hidden-xs-up">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--4" role="tab">Configuración de las notificaciones</a>
              </li>
            </ul>
            <!-- End Nav tabs -->

            <!-- Tab panes -->
            <div id="nav-1-1-default-hor-left-underline" class="tab-content">
              <!-- Edit Profile -->
              <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                <h2 class="h4 g-font-weight-300">Administre su nombre, ID y direcciones de correo electrónico</h2>
                <p>A continuación se encuentran el nombre, la dirección de correo electrónico, los contactos y más en el archivo de su cuenta.</p>

                <ul class="list-unstyled g-mb-30">
                  <!-- Name -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Nombre</strong>
                      <span class="align-top">{{ Auth::user()->name }}</span>


                    </div>
                  </li>
                  <!-- End Name -->

                  <!-- Name -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Apellido</strong>
                      <span class="align-top">{{ Auth::user()->usu_apellido }}</span>
                    </div>
                   
                  </li>
                  <!-- End Name -->

                  <!-- Name -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Email</strong>
                      <span class="align-top">{{ Auth::user()->email }}</span>
                    </div>
                  
                  </li>
                  <!-- End Name -->





                </ul>

                <div class="text-sm-right g-hidden-xs-up">
                  <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancelar</a>
                 <input type="submit" class="btn u-btn-primary rounded-0 g-py-12 g-px-25 g-mr-10" value="Guardar cambios">   
                </div>
              </div>
              <!-- End Edit Profile -->

              <!-- Security Settings -->
              <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--2" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                <h2 class="h4 g-font-weight-300">Opciones de seguridad</h2>
                <p class="g-mb-25">Restablezca su contraseña, cambie las verificaciones, etc.</p>

                <form id="form-change-password" role="form" method="POST" action="{{ url('/auth/credentials') }}" novalidate >
                     {{ csrf_field() }}
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p style='padding:15px;' class='bg-danger'>{{ $error }}</p>
                            @endforeach
                        @endif
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Contraseña actual</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="oldpass" id="oldpass" type="password" placeholder="Current password">
                        <div class="input-group-append">
                          <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-lock"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Current Password -->

                  <!-- New Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Nueva contraseña</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password" name="password" id="password"  placeholder="New password">
                        <div class="input-group-append">
                          <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-lock"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End New Password -->

                  <!-- Verify Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Ingrese nuevamente la contraseña</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="password_confirmation"  
                        type="password" placeholder="Verify password">
                        <div class="input-group-append">
                          <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-lock"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Verify Password -->




                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <div class="text-sm-right">
                    <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancelar</a>
                    <input type="submit" class="btn u-btn-primary rounded-0 g-py-12 g-px-25 g-mr-10" value="Guardar cambios">            
                  </div>
                </form>
              </div>
              <!-- End Security Settings -->



              <!-- Notification Settings -->
              <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--4" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                <h2 class="h4 g-font-weight-300">Manage your Notifications</h2>
                <p class="g-mb-25">Below are the notifications you may manage.</p>

                <form>
                  <!-- Email Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Email notification</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="emailNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Email Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-20">

                  <!-- Comments Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification when a user comments on my blog</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="commentNotification" type="checkbox">
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Comments Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-20">

                  <!-- Update Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification for the latest update</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="updateNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Update Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <!-- Message Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification when a user sends me message</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="messageNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Message Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <!-- Newsletter Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Receive our monthly newsletter</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="newsletterNotification" type="checkbox">
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Newsletter Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <div class="text-sm-right">
                    <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
                    <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
                  </div>
                </form>
              </div>
              <!-- End Notification Settings -->
            </div>
            <!-- End Tab panes -->
          </div>
          <!-- End Profle Content -->
        </div>
      </div>
    </section>

        @include('layouts.footer')          
       @endsection
       
       
      