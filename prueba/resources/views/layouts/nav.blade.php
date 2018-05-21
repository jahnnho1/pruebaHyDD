
   <div class="u-header__section u-header__section--light g-bg-white-opacity-0_8 g-py-6" data-header-fix-moment-exclude="g-bg-white-opacity-0_8 g-py-6" data-header-fix-moment-classes="g-bg-white u-shadow-v18 g-py-0">
      <nav class="js-mega-menu navbar navbar-expand-lg">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

  
            <a href="{{url('/')}}" class="navbar-brand">
            <!--  <img src="{{ asset('assets/img/logo/logo-1.png')}}" alt="Image Description"> -->
              <img src="{{ asset('imgVarias/logo1.png')}}" style="max-width: 99px" alt="Image Description"> 
            </a>
            <!-- End Logo 

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
              <ul class="navbar-nav ml-auto text-uppercase g-font-weight-600 u-main-nav-v2 u-sub-menu-v2">
                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
                  <a href="{{url('/')}}" class="nav-link">Inicio
                
              </a>
                </li>
                <li class="nav-item hs-has-sub-menu g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
                  <a href="{{url('/Categorias')}}" class="nav-link" id="nav-link-1" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-1">Categorias
                
              </a>
                  <!-- Submenu -->
                  <ul class="hs-sub-menu list-unstyled g-mt-17--lg g-mt-7--lg--scrolling" id="nav-submenu-1" aria-labelledby="nav-link-1">
                    
                    @forelse($categorias as $npr)   
                    <li><a href="{{url('/Categorias')}}/{{$npr->tpr_id}}">{{$npr->tpr_nombre}}</a>
                    </li>          
                      @empty
                    <li> <a href="#!"> No existen categorias disponibles  </a></li> 

                   @endforelse
                    
                  </ul>
                  <!-- End Submenu -->
                </li>
                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
                  <a href="{{url('/Servicios')}}" class="nav-link">Servicios
                
              </a>
                </li>
                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg ">
                  <a href="{{url('/Empresa')}}" class="nav-link">Empresa                
              </a>
                </li>


               @if(Auth::user())
          

                @endif



                
            
                @guest
             
                        
                        
                         
                    <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
                      <a  class="nav-link g-bg-primary" href="{{ route('login') }}">{{ __('Crear cuenta/Ingresar') }} </a>
                    </li>
                @else


                <li class="nav-item hs-has-sub-menu g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
                  <a href="{{url('/Categorias')}}" class="nav-link" id="nav-link-1" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-1"> 
                    {{ Auth::user()->name }} </a>
                  <ul class="hs-sub-menu list-unstyled g-mt-17--lg g-mt-7--lg--scrolling" id="nav-submenu-1" aria-labelledby="nav-link-1">

                    <li> <a href="{{ route('logout') }}">
                             Mi Cuenta   </a>
                    </li>

                    <li> <a href="{{ route('logout') }}">
                             Cotizaciones   </a>
                    </li>

               @if(Auth::user())
                  @if(Auth::user()->TypeUser())
                   <li> <a href="{{url('/Administracion/areaAdministrativa')}}">
                             Panel administrativo   </a>
                    </li>
                  @endif
               @endif



                    
                    <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                             Desconectarse   </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </li> 

          
                    
                  </ul>
                  <!-- End Submenu -->
                </li>














                @endguest            
                            
                
                
              </ul>
            </div>
            
            
            
                        <!-- Basket -->
            <div class="u-basket d-inline-block g-valign-middle g-pt-6 g-ml-30 g-ml-0--lg hidden-xs">
              <a href="#!" id="basket-bar-invoker" class="u-icon-v1 g-color-main g-text-underline--none--hover g-width-20 g-height-20" aria-controls="basket-bar" aria-haspopup="true" aria-expanded="false" data-dropdown-event="hover" data-dropdown-target="#basket-bar"
              data-dropdown-type="css-animation" data-dropdown-duration="500" data-dropdown-hide-on-scroll="false" data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                <span class="u-badge-v1--sm g-color-white g-bg-primary g-rounded-50x">0</span>
                <i class="fa fa-shopping-cart"></i>
              </a>

              <div id="basket-bar" class="u-basket__bar u-dropdown--css-animation u-dropdown--hidden g-brd-top g-brd-2 g-brd-primary g-color-main g-mt-25--lg g-mt-15--lg--scrolling" aria-labelledby="basket-bar-invoker">
                <div class="js-scrollbar g-height-280">
                  
                    <!-- Product -->
                  <div class="u-basket__product">
                    <div class="row align-items-center no-gutters">
                      <div class="col-4 g-pr-20">
                        <a href="#!" class="u-basket__product-img">
                          <img src="{{ asset('assets/img-temp/150x150/img1.jpg')}}" alt="Image Description">
                        </a>
                      </div>

                      <div class="col-8">
                        <h6 class="g-font-weight-600 g-mb-0">
                      <a href="#!" class="g-color-main g-color-main--hover g-text-underline--none--hover">Black Glasses</a>
                    </h6>
                        <small class="g-color-gray-dark-v5 g-font-size-14">1 x $400.00</small>
                      </div>
                    </div>
                    <button class="u-basket__product-remove" type="button">&times;</button>
                  </div>
                  <!-- End Product -->




    
                </div>

                <div class="g-brd-top g-brd-gray-light-v4 g-pa-15 g-pb-20">
                  <div class="d-flex flex-row align-items-center justify-content-between g-letter-spacing-1 g-font-size-16 g-mb-15">
                    <strong class="text-uppercase g-font-weight-600">Subtotal</strong>
                    <strong class="g-color-primary g-font-weight-600">$1200.00</strong>
                  </div>

                  <div class="d-flex flex-row align-items-center justify-content-between g-font-size-18">
                    <a href="#!" class="btn u-btn-outline-primary rounded-0 g-width-120">Ver Carrito</a>
                    <a href="#!" class="btn u-btn-primary rounded-0 g-width-120">Cotización </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Basket -->
            
            <!-- End Navigation -->
          </div>
        </nav>
      </div>