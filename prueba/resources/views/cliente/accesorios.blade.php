@extends('layouts.app')
     @section('content')
            @extends('layouts.topBar')
         

            <br> 
            <br> 
            <br> 
            
            
            
            
                  <!-- Product Blocks v11 -->
      <section class="g-py-100">
        <div class="container">
      

          <div id="shortcode11">
            <div class="shortcode-html">
              <!-- Products Block -->
              <div class="row">
                  
                  
              @forelse($productos as $npr)        
                <div class="col-sm-6 col-lg-3 g-mb-30">
                  <!-- Figure -->
                  <figure class="u-block-hover u-shadow-v24">
                    <div class="g-pos-rel">
                      <!-- Figure Image -->
                      <img class="w-100" src="{{ $Recurso->getImagenAttribute($npr->rec_url) }}" alt="Image Description">
                      <!-- End Figure Image -->

                      <!-- Figure Add to Cart -->
                      <figcaption>
                        <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-black g-font-weight-700 g-font-size-11 text-center text-uppercase g-rounded-50x g-top-15 g-left-15 g-px-2 g-py-10">New</span>
                        <div class="g-z-index-2 g-pos-abs g-top-15 g-right-15">
                          <a class="g-color-black g-color-primary--hover g-font-size-16 g-text-underline--none--hover rounded" href="{{url('/producto')}}/{{$npr->pro_id }}">
                            <i class="icon-medical-022 u-line-icon-pro"></i>
                          </a>
                        </div>
                        <div class="u-block-hover__additional--fade g-flex-middle g-pa-15">
                          <div class="g-flex-middle-item--bottom">
                            <a class="d-inline-block g-bg-primary-opacity-0_8 g-bg-primary--hover g-color-white g-font-size-default g-text-underline--none--hover rounded g-py-5 g-px-10" href="{{url('/producto')}}/{{$npr->pro_id }}">
                              <i class="g-mr-5 icon-finance-100 u-line-icon-pro"></i>
                              Ver producto
                            </a>
                          </div>
                        </div>
                      </figcaption>
                      <!-- End Figure Add to Cart -->
                    </div>

                    <!-- Figure Content -->
                    <div class="g-px-15 g-py-20">
                      <header class="d-flex justify-content-between">
                        <h4 class="h5">
                          <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{url('/producto')}}/{{$npr->pro_id }}">{{$npr->pro_nombre}}</a>
                        </h4>
                     
                      </header>
                      <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-mb-5">
                        <li>
                          <a class="g-color-gray-dark-v4 g-color-black--hover g-font-style-normal text-uppercase" href="#!">{{$npr->tpr_nombre}}</a>
                        </li>                   
                      </ul>
                      <div class="js-rating g-color-primary g-font-size-11" data-rating="3" data-spacing="2" data-backward-icons-classes="fa fa-star g-opacity-0_5"></div>
                    </div>
                    <!-- End Figure Content -->
                  </figure>
                  <!-- End Figure -->
                </div>


               @empty
                    No existen productos nuevos
                 
                @endforelse

             
                  <!-- Figure -->
    
              </div>
              
                 <div class="mt-2 mx-auto">
                              @if(count($productos))
                              {{ $productos->links('pagination::bootstrap-4')}}                              
                               @endif
                </div>  
              
              <!-- End Products Block -->
            </div>

        
          </div>




        </div>
      </section>
      <!-- End Product Blocks v11 -->
            
            
            
            
            
            
            
            
      
 
<!--   
       Product Blocks v1 
      <section class="g-bg-secondary g-py-100">
        <div class="container">
          <div id="shortcode01">
            <div class="shortcode-html">
                
                
           @forelse($productos as $npr)     
               Article 
              <article class="d-md-table w-100 g-bg-white g-mb-1"> 
                 Article Image 
                <a class="d-md-table-cell align-middle g-width-130" href="{{url('/producto')}}/{{$npr->pro_id }}">
                  <img class="d-block info-v5-2__image g-ml-minus-1" src="{{ $Recurso->getImagenAttribute($npr->rec_url) }}" alt="Image Description">
                </a>               
                <div class="d-md-table-cell align-middle g-py-15 g-px-20">
                  <h3 class="h6 g-font-weight-700 text-uppercase">
                    <a class="g-color-gray-dark-v2" href="{{url('/producto')}}/{{$npr->pro_id }}">{{$npr->pro_nombre}}</a>
                  </h3>
                  <em class="g-color-gray-dark-v5 g-font-style-normal">{{$npr->pro_descripcion}}</em>
                </div>
             
                <div class="d-md-table-cell align-middle text-md-right g-pa-20">
                  <div class="g-mt-minus-10 g-mx-minus-5">
                    <a class="btn btn-lg u-btn-outline-black g-font-weight-600 g-font-size-12 text-uppercase g-mx-5 g-mt-10" href="{{url('/producto')}}/{{$npr->pro_id }}">Ver</a>
                    <a class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-12 text-uppercase g-mx-5 g-mt-10" href="#!">Agregar</a>
                  </div>
                </div>
              </article>
               End Article 
               @empty
                    No existen productos nuevos
                 
                @endforelse

      


            </div>
          </div>



    

        </div>
      </section>-->
            
            
            

        @include('layouts.footer')          
       @endsection



