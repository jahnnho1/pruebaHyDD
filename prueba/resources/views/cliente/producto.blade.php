@extends('layouts.app')
     @section('content')
            @extends('layouts.topBar')
            @include('layouts.slider')

        
      
            
            
            
<!-- Product Blocks v11 -->
      <section class="container g-py-100 g-bg-white">
   

        <div id="shortcode11">
          <div class="shortcode-html">
            <!-- Article -->
            <article class="row justify-content-between g-color-gray-dark-v5">
              <div class="col-lg-5 g-mb-30">
                <!-- Carousel Images -->
                <div id="js-carousel-11" class="js-carousel g-mb-5" data-infinite="true" data-fade="true" data-arrows-classes="u-arrow-square g-font-size-50 g-pos-abs g-top-50x g-color-white" data-arrow-left-classes="fa fa-angle-left g-left-30 g-mt-minus-30" data-arrow-right-classes="fa fa-angle-right g-right-30 g-mt-minus-30"
                data-nav-for="#js-carousel-11-nav">
                  
               @forelse($imagesProducto as $npr)
             
                  <div class="js-slide">
                    <img class="w-100" src="{{ $Recurso->getImagenAttribute($npr->rec_url) }}" alt="Image Description">
                  </div>
                
                @empty
                    <div class="js-slide">
                    <img class="w-100" src="{{ asset('assets/img-temp/650x750/img2.jpg')}}" alt="Image Description">
                    </div>
                @endforelse
                    
                    
                </div>
                <!-- End Carousel Images -->

              
                <div id="js-carousel-11-nav" class="js-carousel u-carousel-v11" data-infinite="true" data-center-mode="true" data-slides-show="3" data-is-thumbs="true" data-nav-for="#js-carousel-11">
                  
                    
                    
                   @forelse($imagesProducto as $npr)    
                  <div class="js-slide g-cursor-pointer g-transition-0_3 g-mx-3">
                    <img class="w-100" src="{{ $Recurso->getImagenAttribute($npr->rec_url) }}" alt="Image Description">
                  </div>
                     @empty
                   <div class="js-slide g-cursor-pointer g-transition-0_3 g-mx-3">
                    <img class="w-100" src="{{ asset('assets/img-temp/650x750/img1.jpg')}}" alt="Image Description">
                  </div>
                     @endforelse          
                    
                </div>
              
              </div>

              <!-- Article Content -->
              <div class="col-lg-6 g-mb-30">
                <header class="d-flex justify-content-between">
                  <!-- Article Icons -->
                  <h2 class="h2 g-color-black mb-0">{{$viewProducto->pro_nombre }}</h2>
                  <ul class="list-inline g-mb-0">
                    <li class="list-inline-item">
                      <a class="u-icon-v1 u-icon-size--sm g-color-gray-light-v2 g-color-primary--hover" href="#!">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="u-icon-v1 u-icon-size--sm g-color-gray-light-v2 g-color-primary--hover" href="#!">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="u-icon-v1 u-icon-size--sm g-color-gray-light-v2 g-color-primary--hover" href="#!">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="u-icon-v1 u-icon-size--sm g-color-gray-light-v2 g-color-primary--hover" href="#!">
                        <i class="fa fa-pinterest"></i>
                      </a>
                    </li>
                  </ul>
                  <!-- End Article Icons -->
                </header>

                <hr class="g-brd-gray-light-v3 g-my-15">

                <!-- Article Review -->
                <div class="g-mb-30">
                  <div class="js-rating d-inline-block g-color-primary g-font-size-13 g-mr-10" data-rating="3" data-spacing="2"></div>
                  <span class="g-color-gray-dark-v5">
                    (1)
                    <a class="g-color-gray-dark-v5" href="#!">Review</a>
                    |
                    <a class="g-color-gray-dark-v5" href="#!">Agregar Review</a>
                  </span>
                </div>
                <!-- End Article Review -->

                <p class="g-mb-25">{{$viewProducto->pro_descripcion }}</p>

                <!-- Article Prices -->
<!--                <div class="g-mb-30">
                  <span class="d-inline-block align-middle g-color-primary g-font-size-25 g-mr-10">$57.00</span>
                  <s class="d-inline-block align-middle g-color-gray-light-v1 g-font-size-20 g-mr-50">$70.00</s>
                  <span class="d-inline-block align-middle g-bg-red g-color-white g-font-size-12 g-py-3 g-px-8">4 days left</span>
                </div>-->
                <!-- End Article Prices -->

                <!-- Article Form -->
                <form>


                  <!-- Article Quantity -->
                  <fieldset class="g-mb-40">
                    <legend class="h6 g-color-main text-uppercase g-mb-15">Cantidad</legend>
                    <div class="g-mx-minus-15">
                      <div class="d-inline-block g-pos-rel g-top-5 g-mx-15">
                        <div class="js-quantity input-group u-quantity-v1 g-width-150 g-height-45 g-brd-gray-light-v4 g-brd-primary--focus">
                          <div class="js-minus input-group-addon d-flex g-font-size-15 g-width-45 g-color-gray-dark-v4 g-bg-gray-light-v4 g-brd-gray-light-v4 g-rounded-0">
                            &minus;
                          </div>
                          <input class="js-result form-control text-center g-brd-gray-light-v4 g-color-gray-dark-v4 g-rounded-0 g-pa-15" type="text" value="1" readonly>
                          <div class="js-plus input-group-addon d-flex g-font-size-15 g-width-45 g-color-gray-dark-v4 g-bg-gray-light-v4 g-brd-gray-light-v4 g-rounded-0">
                            &plus;
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-12 text-uppercase g-mx-5 g-mt-10">Agregar al Carrito</button>
                    </div>
                  </fieldset>
                  <!-- End Article Quantity -->
                </form>
                <!-- End Article Form -->

                <!-- Article Add -->
                <ul class="list-inline g-mx-minus-20 mb-0">
                  <li class="list-inline-item info-v5-4__action g-brd-right g-brd-gray-light-v3 g-color-gray-dark-v5 g-pr-20 g-pl-15">
                    <i class="align-middle g-font-size-16 g-transition-0_3 g-mr-7 icon-medical-022 u-line-icon-pro"></i>
                    <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!">Agregar to Wishlist</a>
                  </li>
<!--                  <li class="list-inline-item info-v5-4__action g-color-gray-dark-v5 g-pr-20 g-pl-15">
                    <i class="align-middle g-font-size-16 g-transition-0_3 g-mr-7 icon-finance-149 u-line-icon-pro"></i>
                    <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!">Add to Compare</a>
                  </li>-->
                </ul>
                <!-- End Article Add -->

                <hr class="g-brd-gray-light-v3 g-my-15">

                <!-- Article Footer -->
                <footer>
                  <strong>Categories:</strong>
                  <a href="#!">Clothing</a>
                  ,
                  <a href="#!">Shoes</a>
                </footer>
                <!-- End Article Footer -->
              </div>
              <!-- End Article Content -->
            </article>
            <!-- End Article -->
          </div>


            
            
        </div>




      </section>
      <!-- End Product Blocks v11 -->
            
            
            
            
            
            
            
            
            
            

        @include('layouts.footer')          
       @endsection



