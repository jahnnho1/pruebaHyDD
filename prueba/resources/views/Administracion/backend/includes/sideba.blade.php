<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;">


                       <img class="img-responsive" src="" alt=""> </a> 


                </div>
                <div class="info">
                     NombreUsuario
                    <small>CorreoUsuario</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
         
            <li class="nav-header">Navigation</li>
            <li class="has-sub ">

                                <a href="{{url('/Administracion/areaAdministrativa')}}">
                               
                                      <b class=""></b>  
                    <i class="fa fa-institution alias"></i>
                    <span>Inicio</span>
                </a>

              
            </li>

            <li class="has-sub ">
                <a href="javascript:;">
                                    
                                      <b class="caret pull-right"></b>  
                    <i class="fa fa-institution alias"></i>
                    <span>Panel de Administracion</span>
                </a>
                <ul class="sub-menu">
                        <li class="" >     <a  href="{{url('/Administracion/categoriaAdministrativa')}} " data-id=>  <i class=" fa fa-bank "> Categorias </i></a></li> 
                        <li class="" >     <a  href="{{url('/Administracion/productoAdministrativa')}} " data-id=>  <i class=" fa fa-bank "> Productos </i></a></li>  
                        <li class="" >     <a  href="{{url('/')}} " data-id=>  <i class=" fa fa-bank "> Usuarios </i></a></li>  
                        <li class="" >     <a  href="{{url('/Administracion/homePageAdministrativa')}} " data-id=>  <i class=" fa fa-bank "> HomePage </i></a></li>  
                            
                </ul>
            </li>    

            
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>

<div class="sidebar-bg"></div>
