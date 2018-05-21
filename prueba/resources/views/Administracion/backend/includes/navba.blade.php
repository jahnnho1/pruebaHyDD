<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            <a href="" class="navbar-brand"><span class="navbar-logo"></span> H y D Limitada</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <button type="button" class="navbar-toggle p-0 m-r-5" data-toggle="collapse" data-target="#top-navbar">
                <span class="fa-stack fa-lg text-inverse">
                    <i class="fa fa-square-o fa-stack-2x m-t-2"></i>
                    <i class="fa fa-cog fa-stack-1x"></i>
                </span>
            </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->
        
        
        <!-- begin navbar-collapse 
        <div class="collapse navbar-collapse pull-left" id="top-navbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-gears fa-fw"></i> Selecciona Empresa <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Chile</a></li>
                        <li><a href="#">Argentina</a></li>
                        <li><a href="#">Uruguay</a></li>
                        <li><a href="#">Perú</a></li>
                        <li><a href="#">Colombia</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- end navbar-collapse -->

        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
            
<!--            <li>
                <form class="navbar-form full-width">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>-->
   
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    
                  
        <img class="img-responsive" src="{{ Auth::user()->imgUser() }}" alt="">     
                  
                    
                   
                        
                        
                        
                    <span class="hidden-xs">Bienvenido {{ Auth::user()->name }}</span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                    <li class="arrow"></li>
                    <li><a href="">Editar Perfil</a></li>
                    <li><a href="{{url('/')}}">Home pagina Web</a></li>           
                    <li class="divider"></li>
                

                    <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                             Desconectarse   </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </li> 


                </ul>
            </li>
        </ul>
        <!-- end header navigation right -->
    </div>
    <!-- end container-fluid -->
</div>