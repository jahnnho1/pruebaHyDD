
@extends('Administracion.backend.base.index')



 @section('contentAdm')


 

    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Modificar Categoria <small> </small></h1>




   <form id="fileupload" action="{{url('/Administracion/EjecutarModificarCategoriaAdm')}} " method="POST" enctype="multipart/form-data">
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
                    <h4 class="panel-title">Modificar Categoria</h4>
                </div>
                <div class="panel-body">
        
                @include('layouts.alertas')
        
     
                    
                    <h4 class="m-t-0">Nombre</h4>
                    <input class="form-control" type="text" placeholder="Titulo" name="categoriaNombre" value="{{$categoria->tpr_nombre}}">
                    
                     <h4 class="m-t-0">Descripción</h4>                   
                    <input class="form-control" type="text" placeholder="Titulo" name="categoriaDescripcion" value="{{$categoria->tpr_descripcion}}">
                    <h4 class="m-t-0">Caracteristica 1</h4>
                    <textarea class="form-control" rows="2" id="comment" name="categoriaCaract1" maxlength="160" placeholder="Un maximo de 160 Caracteres" value="">{{$categoria->tpr_caracteristica1}}</textarea>
                    
                    
                    <h4 class="m-t-0">Caracteristica 2</h4>
                    <textarea class="form-control" rows="2" id="comment" name="categoriaCaract2" maxlength="160"  placeholder="Un maximo de 160 Caracteres" value="">{{$categoria->tpr_caracteristica2}}</textarea>

         
                    
                    
                    
                    
                    
                               <input type="text" class="invisible" name="categoriaId" value="{{$categoria->tpr_id}}">
                    
                    
                    



                </div>
                <div class="panel-footer">
                    <input id="btAgregar" type="submit" class="btn btn-success" value="Publicar entrada">                
                </div>
            </div>                               
        </div>

    </form>


 @endsection
    

