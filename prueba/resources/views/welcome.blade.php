@extends('layouts.app')
     @section('content')
            @extends('layouts.topBar')
            
            
            @include('layouts.slider')

        
            

            

               

  
   @if(count($destacados))  
            
          <!-- Product Blocks v7 -->

       
       
            <section class="g-bg-secondary g-py-20" >
		              <div class="text-center g-mb-5 g-color-black  ">
                                <h2 class="h4">Productos
                                  <span class="g-color-primary g-ml-5 g-mb-5 ">Destacados</span>
                                </h2>
                                 </div>
              </section>
          
      
 <section class="g-bg-white g-py-100  g-bg-graylight-radialgradient-ellipse">
        <div id="shortcode07 ">
          <div class="shortcode-html">
            <!-- Products Block -->
            <div class="js-carousel" data-vertical="true" data-pagi-classes="u-carousel-indicators-v28 text-center">
   

                
            @forelse($destacados as $npr)
              <div class="js-slide">
                <!-- Article -->
                <article class="row text-center">
                  <div class="col-lg-6 g-mb-50">
                    <!-- Article Info -->
                    <span class="d-block g-color-gray-dark-v5 g-font-weight-700 g-font-size-12 text-uppercase g-mb-20">{{$npr->des_descripcion_1}}</span>
                    <h3 class="h1 g-color-black g-font-weight-700 text-uppercase g-line-height-1_2 g-mb-35">{{$npr->pro_nombre}}</h3>
                    <i class="d-block fa fa-circle g-mb-30"></i>
                    <div class="g-px-70--md g-mb-20">
                      <p>{{$npr->des_descripcion_2}}</p>
                       <p>{{$npr->des_descripcion_3}}</p>
                    </div>
<!--                    <span class="d-block g-font-weight-700 g-font-size-26 g-mb-20">$14.00</span>-->
            <a class="" href="{{url('/producto')}}/{{$npr->pro_id }}">        <button type="button" class="btn btn-md u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase" > Ver</button></a>
                    <!-- End Article Info -->
                  </div>

                  <div class="col-lg-6 g-mb-50">
                    <!-- Article Image -->
                    <img class="img-fluid mx-auto g-width-60x" src="{{ $Recurso->getImagenAttribute($npr->rec_url) }}" alt="Image Description" style="height:350px; width: 350px">
                    <!-- End Article Image -->
                  </div>
                </article>
                <!-- End Article -->
              </div>
                
                 @empty
                        Sin articulo en promoción

                 @endforelse
               
                
                
                
            </div>
            <!-- End Products Block -->
          </div>

 
        </div>




       </section>
      
      
         @endif
        
             <section class="g-bg-secondary g-py-20 " >
		              <div class="text-center g-mb-5 g-color-black  ">
                                <h2 class="h4">Nuevos
                                  <span class="g-color-primary g-ml-5 g-mb-5 ">Productos</span>
                                </h2>
                                    
                                 </div>
              </section>

              

      
      
      
            
  <!-- Product Blocks v24 -->
      <section class="g-bg-white g-py-100  g-bg-graylight-radialgradient-ellipse">
        <div class="container">
          <div id="shortcode24">
            <div class="shortcode-html">
              <div class="row g-mx-minus-10 g-mb-50">
                
               
                 @forelse($nuevosProductos as $npr)
                     
                  
                 
                  <div class="col-md-6 col-lg-4 g-px-10">
                  <!-- Article -->
                  <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                    <!-- Article Image -->
                    <div class="g-max-width-100 g-mr-15">
                        <img class="d-flex w-100" src="{{ $Recurso->getImagenAttribute($npr->rec_url) }}" alt="Image Description" style="height:150px; width: 150px">
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Info -->
                    <div class="media-body align-self-center">
                      <h4 class="h5 g-mb-7">
                          
                        <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="{{url('/producto')}}/{{$npr->pro_id }}">{{$npr->pro_nombre}}</a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="{{url('/Categorias')}}/{{$npr->tpr_id}}">{{$npr->tpr_nombre}}</a>
                      <!-- End Article Info -->

                      <!-- Article Footer -->
                      <footer class="d-flex justify-content-between g-font-size-16">
                       <span class="g-color-black g-line-height-1"> {{$npr->pro_codigo_serial }}</span>
                        <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                          <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                              <i class="icon-finance-100 u-line-icon-pro"></i>
                            </a>
                          </li>
                          <li class="list-inline-item align-middle">
                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <i class="icon-medical-022 u-line-icon-pro"></i>
                            </a>
                          </li>
                        </ul>
                      </footer>
                      <!-- End Article Footer -->
                    </div>
                  </article>
                  <!-- End Article -->
                </div>
                 @empty
                    No existen productos nuevos
                 
                 @endforelse

  

    

         

    

        

      

     
              </div>
            </div>
          </div>




        </div>
      </section>
      <!-- End Product Blocks v24 -->
            
            
            


        @include('layouts.footer')          
       @endsection



