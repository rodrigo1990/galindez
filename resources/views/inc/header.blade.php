
	<header id="menu-center" >
			<div  class="row">
				<div class="container-fluid">
					<div class="col-lg-12 hidden-md hidden-sm hidden-xs btn-cont">
						<ul id="nav" class="menu center-block">
							<li><a href="proyectos"  class="after-btn">MENÚ</a></li>
							<li><a  id="nosotros-btn" target="" class="after-btn"  >GALERÍA</a></li>
							<li><a onClick="openFormulario()" class="after-btn">NOSOTROS</a></li>
							<li class="logo-li">
								<a href="index" class="logo-btn" style="cursor:pointer">
									<img class="logo" src="<?php echo asset("img/logo-01.svg")?>">
								</a>
							</li>
							<li><a  id="nosotros-btn" target="" class="after-btn"  >CONTACTO</a></li>
							<li><a onClick="openFormulario()" class="after-btn">PRESUPUESTO</a></li>

							<li class="icons-li">

								<a href="{{$ig}}" target="_blank" class="float-left rr-ss"><i class="fab fa-instagram"></i></a>

								
								<a href="{{$fb}}" target="_blank" class="float-left rr-ss"><i class="fab fa-facebook-f"></i></a>


							</li>
							
						</ul>
					</div>

				</div>
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12 text-center xs-row " style="">
					<a href="index.php">
						<img class="logo" src="<?php echo asset("img/logo-blue.svg")?>"></img> 
					</a>
						<a id="abrirMenu">
							<i class="fa fa-bars"  id="abrirMenu"></i>
						</a>
					</div>
			</div>
		</header>
		<ul id="xsMenu" class="overlay-xs-menu menu">
			<div class="row">
				<a id="cerrarMenu"  class="close-menu-xs">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<li><a href="proyectos" class="xs-btn spa-btn">PROYECTOS</a></li>
			<li><a   class="xs-btn" >NOSOTROS</a></li>
			<li><a href="formulario" class="xs-btn spa-btn">COLABORÁ</a></li>
			<li>
				
				<a href="" target="_blank" class="float-left rr-ss"><i class="far fa-envelope"></i></a>

				<a href="https://www.facebook.com/argenpesos" target="_blank" class="float-left rr-ss ml2"><i class="fab fa-facebook-f"></i></a>


				<a href="https://www.instagram.com/argenpesos/" target="_blank" class="float-left rr-ss ml2"><i class="fab fa-instagram"></i></a>
			</li>
		</ul>

