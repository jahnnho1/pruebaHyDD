
@extends('Administracion.backend.base.index')



 @section('contentAdm')


 

    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Agregar Categoria <small> </small></h1>




   <form id="fileupload" action="{{url('/Administracion/EjecutarAgregarPromocionAdm')}} " method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}


        
        <div class="col-md-12 ui-sortable">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Agregar Categoria</h4>
                </div>
                <div class="panel-body">
        
                @include('layouts.alertas')
        
     
                    
                    <h4 class="m-t-0">Nombre promoción</h4>
                    <input class="form-control" type="text"  name="promocionNombre">
                    
                    <h4 class="m-t-0">Descripción de la promoción</h4>
                    <input class="form-control" type="text"  name="promocionDescripcion">
                    
                    <div class="">
                            <h4 class="m-t-0">Descripcion 1</h4>
                            <input class="form-control" type="text"  name="promocionDescripcion1">                    
                            <h4 class="m-t-0">Producto 1</h4>
                             <select class="form-control input-sm" name="promocionIdProducto1">                         
                                  @foreach($Productos as $producto)
                                        <option value="{{$producto->pro_id }}">{{$producto->pro_nombre }} ID : {{$producto->pro_id }}</option>
                                  @endforeach
                            </select>
                    </div>
                        
                     <div class="">
                            <h4 class="m-t-0">Descripcion 2</h4>
                            <input class="form-control" type="text"  name="promocionDescripcion2">                    
                            <h4 class="m-t-0">Producto 2</h4>
                             <select class="form-control input-sm" name="promocionIdProducto2">                         
                                  @foreach($Productos as $producto)
                                        <option value="{{$producto->pro_id }}">{{$producto->pro_nombre }} ID : {{$producto->pro_id }}</option>
                                  @endforeach
                            </select>
                    </div>
                    
                                        <div class="">
                            <h4 class="m-t-0">Descripcion 3</h4>
                            <input class="form-control" type="text"  name="promocionDescripcion3">                    
                            <h4 class="m-t-0">Producto 3</h4>
                             <select class="form-control input-sm" name="promocionIdProducto3">                         
                                  @foreach($Productos as $producto)
                                        <option value="{{$producto->pro_id }}">{{$producto->pro_nombre }} ID : {{$producto->pro_id }}</option>
                                  @endforeach
                            </select>
                    </div>
                   
                    
                    


                    

         
                    
                    
                    
                    
                    
                    
                    
                    
                    



                </div>
                <div class="panel-footer">
                    <input id="btAgregar" type="submit" class="btn btn-success" value="Publicar entrada">                
                </div>
            </div>                               
        </div>

    </form>


 @endsection
    

