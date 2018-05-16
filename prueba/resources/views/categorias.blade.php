@extends('layouts.app')
     @section('content')
            @extends('layouts.topBar')
       
            <br><br><br><br><br><br>
  
            
     @forelse($categorias as $npr)
      <!-- Box Shadow #03 -->
      <section class="g-py-20">
        <div class="container">
          <div class="row">
            <div class="col-lg">
              <div id="shortcode5">
                <div class="shortcode-html">
                  <!-- Box Shadow -->
                  <div class="u-shadow-v2 g-brd-around g-brd-gray-light-v4 g-line-height-2 g-pa-40 g-mb-30" role="alert">
                    <h3 class="h2 g-font-weight-300 g-mb-20">{{$npr->tpr_nombre}}</h3>
                    <p class="mb-0">{{$npr->tpr_descripcion}}
                    </p>
                     <p class="mb-0">{{$npr->tpr_caracteristica1}}
                    </p>
                    <p class="mb-0">{{$npr->tpr_caracteristica2}}
                    </p>

                    <br>
                    <a class="btn btn-lg u-btn-darkgray text-uppercase g-font-weight-600 g-font-size-12 pull-right" target="_blank" href="{{url('/Categorias')}}/{{$npr->tpr_id}}">Ver </a>
                    
                  </div>
                  <!-- End Box Shadow -->
                </div>
              </div>
            </div>
     
          </div>
        </div>
      </section>
      <!-- End Box Shadow #03 -->
      @empty
        No existen categorias disponibles

     @endforelse

        @include('layouts.footer')          
       @endsection
       
       
      
     


       

       

  

   