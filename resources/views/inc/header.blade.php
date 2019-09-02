
	<header id="menu-center" >
			<div  class="row">
				<div class="container-fluid">
					<div class="col-lg-12 hidden-md hidden-sm hidden-xs btn-cont">
						<ul id="nav" class="menu center-block">
							<li><a onClick="scrollAnimate('menu')"  class="after-btn">MENÚ</a></li>
							<li><a  onClick="scrollAnimate('galeria')"  class="after-btn"  >GALERÍA</a></li>
							<li><a onClick="scrollAnimate('nosotros')" class="after-btn">NOSOTROS</a></li>
							<li class="logo-li">
								<a onClick="scrollAnimate('owl-1')" class="logo-btn" style="cursor:pointer">
									<img class="logo" src="<?php echo asset("img/logo.svg")?>">
								</a>
							</li>
							<li><a onClick="scrollAnimate('contacto')" id="nosotros-btn" class="after-btn"  >CONTACTO</a></li>
							<li><a onClick="scrollAnimate('formulario')" class="after-btn">PRESUPUESTO</a></li>

							<li class="icons-li">

								<a href="{{$ig}}" target="_blank" class="float-left rr-ss"><i class="fab fa-instagram"></i></a>

								
								<a href="{{$fb}}" target="_blank" class="float-left rr-ss"><i class="fab fa-facebook-f"></i></a>


							</li>
							
						</ul>
					</div>

				</div>
				<div class="hidden-lg col-md-12 col-sm-12 col-xs-12 text-center xs-row " style="">
					<div class="container">
						<a href="index.php">
							<img class="logo" src="<?php echo asset("img/logo.svg")?>">
						</a>
							<a id="abrirMenu">
								<i class="fa fa-bars"  id="abrirMenu"></i>
							</a>
						</div>
					</div>
			</div>
		</header>
		<ul id="xsMenu" class="overlay-xs-menu menu">
			<div class="row">
				<a id="cerrarMenu"  class="close-menu-xs">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<li><a onclick="scrollAnimate('menu')"  class="xs-btn spa-btn">MENU</a></li>
			<li><a onclick="scrollAnimate('galeria')"  class="xs-btn" >GALERÍA</a></li>
			<li><a onclick="scrollAnimate('nosotros')" class="xs-btn spa-btn">NOSOTROS</a></li>
			<li><a onclick="scrollAnimate('contacto')" class="xs-btn spa-btn">CONTACTO</a></li>
			<li><a onclick="scrollAnimate('formulario')" class="xs-btn spa-btn">PRESUPUESTO</a></li>
			<li>
				
				<div class="center-block" style="width:fit-content">

    				<a href="{{$fb}}" target="_blank" class="float-left rr-ss ml2"><i class="fab fa-facebook-f" style="margin-right:10px"></i></a>
    
    
    				<a href="{{$ig}}" target="_blank" class="float-left rr-ss ml2"><i class="fab fa-instagram" style="margin-right:10px"></i></a>
			
			    </div>
			
			</li>
		</ul>

