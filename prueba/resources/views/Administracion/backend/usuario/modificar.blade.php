
@extends('Administracion.backend.base.index')



 @section('contentAdm')


 

    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Modificar Usuario <small> </small></h1>




   <form id="fileupload" action="{{url('/Administracion/EjecutarModificarUsuarioAdm')}} " method="POST" enctype="multipart/form-data">
        

     
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
                    <h4 class="panel-title">Modificar Usuario</h4>
                </div>
                <div class="panel-body">
        
                @include('layouts.alertas')
        
     
                    
                    <h4 class="m-t-0">Nombre</h4>
                    <input class="form-control" type="text"  name="usuarioNombre" value="{{$usuario->name}}">
                    
                    
                    <h4 class="m-t-0">Apellido</h4>
                    <input class="form-control" type="text"  name="usuarioApellido" value="{{$usuario->usu_apellido}}">


                    <h4 class="m-t-0">Email</h4>
                    <input class="form-control" type="text"  name="usuarioEmail" value="{{$usuario->email}}">
                    
                    <h4 class="m-t-0">Tipo de Usuario</h4>
                     <select class="form-control input-sm" name="usuarioTipoUsuario">                         
                          @foreach($TipoUsuario as $TipoUsuarios)


                                <option value="{{$TipoUsuarios->tus_id }}"  class="@if($TipoUsuarios->tus_id == 2)  selected @endif">{{$TipoUsuarios->tus_nombre }}</option>
                          @endforeach
                    </select>
                    
                    
         
                    <input type="text" class="invisible" name="usuarioId" value="{{$usuario->id}}">

                
                        <!-- The table listing the files available for upload/download -->
         
                    
                    
                    
                    
                    
                    
                    
                    
                    



                </div>
                <div class="panel-footer">
                    <input id="btAgregar" type="submit" class="btn btn-success" value="Modificar">                
                </div>
            </div>                               
        </div>

    </form>


 @endsection
    

