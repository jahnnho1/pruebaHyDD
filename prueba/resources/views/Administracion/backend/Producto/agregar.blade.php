
@extends('Administracion.backend.base.index')



 @section('contentAdm')


 

    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Agregar producto <small> </small></h1>




   <form id="fileupload" action="{{url('/Administracion/EjecutarAgregarProductoAdm')}} " method="POST" enctype="multipart/form-data">
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
                    <h4 class="panel-title">Agregar producto</h4>
                </div>
                <div class="panel-body">
        
                @include('layouts.alertas')
        
     
                    
                    <h4 class="m-t-0">Nombre</h4>
                    <input class="form-control" type="text"  name="productoNombre">
                    
                    
                    <h4 class="m-t-0">Codigo Serial</h4>
                    <input class="form-control" type="text"  name="productoCodigo">
                    
                      <h4 class="m-t-0">Descripción</h4>
                    <textarea class="form-control" rows="2" id="comment" name="productoDescripcion" maxlength="1000"></textarea>

                    <h4 class="m-t-0">Categoria</h4>
                    
                     <select class="form-control input-sm" name="productoCategoria">                         
                          @foreach($Categorias as $Categoria)
                                <option value="{{$Categoria->tpr_id }}">{{$Categoria->tpr_nombre }}</option>
                          @endforeach
                    </select>
                    
                    
         
                    <div class="fileupload-buttonbar pull-right">
                            <div class="col-md-12">
                                <span class="btn btn-success fileinput-button">
                                    <i class="fa fa-plus"></i>
                                    <span>Agregar Imagen...</span>
                                    <input type="file" name="productoImagen" multiple>
                                </span>
                            </div>
                    </div>
                        <!-- The table listing the files available for upload/download -->
         
                    
                    
                    
                    
                    
                    
                    
                    
                    



                </div>
                <div class="panel-footer">
                    <input id="btAgregar" type="submit" class="btn btn-success" value="Publicar entrada">                
                </div>
            </div>                               
        </div>

    </form>


 @endsection
    

