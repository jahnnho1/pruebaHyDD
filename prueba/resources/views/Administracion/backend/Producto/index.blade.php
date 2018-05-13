
@extends('Administracion.backend.base.index')



 @section('contentAdm')
  

    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Panel administrativo de Productos <small> </small></h1>
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
							<a href="">Agregar <i class="fa fa-arrow-circle-o-right"></i></a>
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
                                        <th>Còdigo</th>                                  
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Fecha Creacion</th>                                     
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($Productos as $pro)
                                        <tr class="odd gradeX">
                                            <td>{{$pro->pro_id }}</td>
                                            <td>{{$pro->pro_codigo_serial }}</td>
                                            <td>{{$pro->pro_nombre }}</td>                                   
                                           
                                            
                                            @if($pro->pro_estado == 1) 
                                             <td>  <span class="label label-success">Activo</span></td>
                                            @else                                     
                                              <td>  <span class="label label-danger">Inactivo</span></td>
                                            @endif
                                            
                                            
                                            
                                            
                                            <td>----</td>                                                                                  
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
                            
                            
                            
                            
                   
                                <div>
                                    <ul class="pagination m-t-0 m-b-10">
                                     
                                            <li class="disabled"><a>«</a></li>
                                            <li class="disabled"><a>Anterior</a></li>
                                     
                                            <li><a href="">«</a></li>
                                            <li><a href="">Anterior</a></li>
                                       
                                       
                                                <li class="active">
                                                    <a>1</a>
                                                </li>
                                                                  
                                                <li><a href=""></a></li>
                    
                                            <li class="disabled"><a>Siguiente</a></li>
                                            <li class="disabled"><a>»</a></li>
                               
                                            <li><a href="">Siguiente</a></li>
                                            <li><a href="">»</a></li>
                                
                                    </ul>
                                </div>     
                                









                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-10 -->
        </div>



 @endsection
    