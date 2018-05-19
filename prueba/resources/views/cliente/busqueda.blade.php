@extends('layouts.app')
     @section('content')
            @extends('layouts.topBar')
             @include('layouts.slider')
          
<br>
<div class="container">
          <div class="card g-brd-lightred rounded-0">
          <h3 class="card-header h5 text-white g-bg-lightred g-brd-transparent rounded-0">
            <i class="fa fa-tasks g-font-size-default g-mr-5"></i>
            Productos relacionados con la busqueda
          </h3>

          <div class="card-block">







  @forelse($productos as $npr)    
<article class="d-md-table w-100 g-bg-white g-mb-1">
  <!-- Date -->
  <div class="d-md-table-cell align-middle g-width-125--md text-center g-color-gray-dark-v5 g-py-10 g-px-20">
    <time datetime="2015-06-27">
      <span class="d-block g-color-black g-font-weight-700 g-font-size-40 g-line-height-1"></span>
   {{ $npr->created_at }}
    </time>
  </div>
  <!-- End Date -->



  <!-- Article Content -->
  <div class="d-md-table-cell align-middle g-py-15 g-px-20">
    <h3 class="h6 g-font-weight-700 text-uppercase">
      <a class="g-color-gray-dark-v2" href="#!">  {{ $npr->pro_nombre }}</a>
    </h3>
    <em class="g-color-gray-dark-v5 g-font-style-normal">{{ $npr->pro_descripcion }}</em>
  </div>
  <!-- End Article Content -->

  <!-- Price 
  <div class="d-md-table-cell align-middle g-py-5 g-px-20">
    <span class="d-block g-color-gray-dark-v2 g-font-weight-700">$15</span>
    <span class="d-block g-color-gray-dark-v5 g-font-size-11 text-uppercase">Per Ticket</span>
  </div>
  End Price -->

  <!-- Actions -->
  <div class="d-md-table-cell align-middle text-md-right g-pa-20">
    <div class="g-mt-minus-10 g-mx-minus-5">
      <a class="btn btn-lg u-btn-outline-black g-font-weight-600 g-font-size-12 text-uppercase g-mx-5 g-mt-10" href="{{url('/producto')}}/{{$npr->pro_id }}">Ver producto</a>

    </div>
  </div>
  <!-- End Actions -->
</article>
<!-- End Article -->

               @empty
                    No se encontraron productos relacionados con la busqueda 
                 
               @endforelse









          


          </div>
          </div>

            
    </div> 
    <br>       

        @include('layouts.footer')          
       @endsection



