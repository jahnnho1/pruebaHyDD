
@extends('Administracion.backend.base.index')



 @section('contentAdm')
  

    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Panel administrativo de Categorías <small> </small></h1>
                    <div class="row">
				<!-- begin col-3 -->
				<div class="col-md-12 col-sm-12">
					<div class="widget widget-stats bg-green">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>Crear Publicacion</h4>
                                                        <p>5<small> Productos Agregados </small></p>	
						</div>
						<div class="stats-link">
							<a href="{{url('/Administracion/agregarCategoriaAdm')}}">Agregar <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
						
                    </div>

        <div class="row">

            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Laboratorios Publicados </h4>
                    </div>
                    <div class="alert alert-warning fade in">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        Se han creado un total de <strong>(5)</strong> Publicaciones sobre Especialidades
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>                                                                        
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Estado</th>
                                        <th>Fecha Creaciòn</th>                                     
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($Categorias as $Categoria)
                                        <tr class="odd gradeX">
                                            <td>{{$Categoria->tpr_id }}</td>
                                            <td>{{$Categoria->tpr_nombre }}</td>
                                            <td>{{$Categoria->tpr_descripcion }}</td>                                 
                                           
                                            
                                            @if($Categoria->tpr_estado == 0) 
                                             <td>  <span class="label label-success">Activo</span></td>
                                            @else                                     
                                              <td>  <span class="label label-danger">Inactivo</span></td>
                                            @endif
                                            
                                            
                                            
                                            
                                            <td>{{$Categoria->created_at }}</td>                                                                                  
                                            <td>
                                                <a class="btn btn-icon btn-sm" title="Modificar MP"  href="">                                    
                                                    <i class="fa fa-lg fa-edit"> </i>
                                                </a>  
                                                    
                                                <a href="#modal-estado" class="btn btn-icon btn-sm" data-toggle="modal" 
                                                   data-matid="">
                                                    <i class="fa fa-lg fa-power-off"></i>
                                                </a>    
                                                    
                                                <a href="#modal-eliminar" class="btn btn-icon btn-sm" data-toggle="modal" 
                                                   data-matid="">
                                                    <i class="fa fa-lg fa-trash-o"></i>
                                                </a> 
                                            </td>    
                                        </tr> 
                                          @empty
                                            No existen productos 
                                          @endforelse    
                                              
                       
                                </tbody>

                            </table>                            
                            
                            
                            <div class="mt-2 mx-auto">
                              @if(count($Categorias))
                              {{ $Categorias->links('pagination::bootstrap-4')}}
                              
                               @endif
                           </div>  








                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-10 -->
        </div>



 @endsection
    