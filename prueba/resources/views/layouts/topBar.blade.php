    <!-- Header -->
    <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance" data-header-fix-moment="300">
      <!-- Top Bar -->
      <div class="u-header__section u-header__section--hidden u-header__section--dark g-bg-black-opacity-0_7 g-py-7">
        <div class="container">
          <div class="row flex-column flex-md-row align-items-center justify-content-md-end text-uppercase g-font-weight-600 g-color-white g-font-size-13">
            <div class="col-auto mr-md-auto g-px-15">
              <i class="icon icon-weather-001 g-font-size-20 g-valign-middle g-mr-10"></i>
              Chile
            </div>
                




            <div class="d-inline-block g-pos-rel g-valign-middle g-ml-30 g-ml-0--lg  hidden-xs">
              <a href="#!" class="g-font-size-18 g-color-main" aria-haspopup="true" aria-expanded="false" aria-controls="searchform-1" data-dropdown-target="#searchform-1" data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeInUp"
              data-dropdown-animation-out="fadeOutDown">
                <i class="fa fa-search g-valign-middle g-mr-5 "></i>
              </a>

              <!-- Search Form -->
              <form action="{{url('/productoBusqueda')}}"  id="searchform-1" class="u-searchform-v1 u-dropdown--css-animation u-dropdown--hidden g-bg-white g-pa-15 g-mt-15--lg g-mt-15--lg--scrolling">
                <div class="input-group g-brd-primary--focus g-bg-black-opacity-0_7">
                  <input name="productoBusqueda"  class="form-control rounded-0 u-form-control" type="search" placeholder="Ingresa lo que busques..">
                  <div class="input-group-addon p-0">
                    <button class="btn rounded-0 btn-primary btn-md g-font-size-15 g-px-15" type="submit">Go</button>
                  </div>
                </div>
              </form>
              <!-- End Search Form -->
            </div>


 







            <div class="col-auto g-px-15">
              <i class="fa fa-phone g-valign-middle g-mr-5"></i>
              1 800 88 4411
            </div>

            <div class="col-auto g-px-15">
              <ul class="list-inline mb-0 g-mx-minus-3">
                <li class="list-inline-item g-valign-middle g-mx-3">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#!">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item g-valign-middle g-mx-3">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#!">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item g-valign-middle g-mx-3">
                  <a class="d-block u-icon-v3 u-icon-size--xs g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-gray-dark-v1--hover g-text-underline--none--hover" href="#!">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->
      
      



 
      

    @include('layouts.nav')
      
      

      
      
      
      
    </header>
    <!-- End Header -->

