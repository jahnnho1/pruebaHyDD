         <div class="modal fade" id="modal-eliminar">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Eliminar Categoria</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger m-b-0">
                            <h4><i class="fa fa-info-circle"></i> Eliminar Categoria</h4>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </div>
<form class="form-horizontal form-bordered" data-parsley-validate="true" 
name="demo-form" novalidate="" method="POST" action="{{url('/Administracion/eliminarCategoriaAdm')}}"> 
      {{ csrf_field() }} 
                           <input type="text" class="hidden" id="matid" name="mpId">   
                          <div class="modal-footer">
                              <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Cerrar</a>
                             <input type="submit" class="btn btn-sm btn-warning" value="Eliminar Recurso" >
                          </div>
                    </form>      
                </div>
            </div>
        </div> 