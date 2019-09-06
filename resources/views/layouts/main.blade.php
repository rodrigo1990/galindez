
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <title></title>
 
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap-3.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
 	<link rel="stylesheet" href="css/app.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  	<link rel="stylesheet" href="<?php echo asset('unitegallery-master/dist/css/unite-gallery.css') ?>">


</head>
<body>

    @yield('content')

<div class="rr-ss-fixed">

	<a href="{{$ig}}" target="_blank" class="text-center"><i class="fab fa-instagram"></i></a>							
	<a href="{{$fb}}" target="_blank" class="text-center"><i class="fab fa-facebook-f"></i></a>


</div>

<div class="fixed-btn" onClick="scrollAnimate('formulario')">
	<p>Pedí tu <br> <b>presupuesto</b></p>
	<img src="<?php echo asset('img/icon-fixed-btn.svg') ?>" class="center-block white" alt="">
	<img src="<?php echo asset('img/icon-fixed-btn-red.svg') ?>" class="center-block red" alt="">
</div>



<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkne1gpPfJ0B3KrE4OQURwPi492LDjg8g"></script>
<script src="js/app.js"></script>
<script src="<?php echo asset('unitegallery-master/dist/js/unitegallery.js') ?>"></script>
<script type='text/javascript' src="<?php echo asset('unitegallery-master/dist/themes/tiles/ug-theme-tiles.js') ?>"></script>

<script>
	$(document).ready(function(){
		window.centerGlobal = {lat: -34.562154, lng: -58.492396};
		window.locations=[];
		window.markers=[];
		window.map;
		window.noDefaultLocations = [
						{
						    featureType: "poi",
						    stylers: [
						      { visibility: "off" }
						    ]   
						  }
						];


	 	locations.push(['<b>CAPITAL FEDERAL<br> </b><br>Reconquista 660, CABA <br><br> <b>TEL:</b> 4510-6594 <br><br> <b>Horario:</b> Lunes a viernes de  9 a 18hs. ',-34.562154,-58.492396]);

    	initMap();





    	$("#gallery").unitegallery();



    });




		function initMap() {
 		map = new google.maps.Map(document.getElementById('map'), {
	      center: centerGlobal,
	      zoom: 16
	    });

	    map.setOptions({styles:noDefaultLocations});

	    agregarLocaciones(locations);
	  }




	   function agregarLocaciones(locations){
			var infowindow =  new google.maps.InfoWindow({});
			var marker,count;

			/*map.setZoom(5);
			map.setCenter(centerGlobal);*/


			for (count = 0; count < locations.length; count++) {
				console.log(locations[count][1]+","+ locations[count][2])
			    marker = new google.maps.Marker({
			      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
			      map: map,
			      icon: "<?php echo asset("img/logo-maps.svg")?>",
			      title: locations[count][0]
			    });


				markers.push(marker);
			  	
			  }

		}


		function removeNumbers(input){
			var soloNumeros=/(\d+)/;
			var value = $(input).val();
			var stringFromArr;

			//alert(value);

				if(value.search(soloNumeros) != -1){
					var arr = value.split('');

					for(i=0;i<arr.length;i++){

						if(!isNaN(arr[i])){

							arr.splice(i,1);

								for(i=0;i<arr.length;i++){

								if(i==0){
									stringFromArr = arr[i];	
								}else{
									stringFromArr += arr[i];
								}

							}	
											
						}
					}

					$(input).val(stringFromArr);
				}
			
		}

</script>


</body>
</html>