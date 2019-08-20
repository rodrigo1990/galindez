
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
</head>
<body>

    @yield('content')

<div class="rr-ss-fixed">

	<a href="{{$ig}}" target="_blank" class="text-center"><i class="fab fa-instagram"></i></a>							
	<a href="{{$fb}}" target="_blank" class="text-center"><i class="fab fa-facebook-f"></i></a>


</div>

<div class="fixed-btn">
	<p>Pedí tu <br> <b>presupuesto</b></p>
	<img src="<?php echo asset('img/icon-fixed-btn.svg') ?>" class="center-block" alt="">
</div>
<script src="js/app.js"></script>
</body>
</html>