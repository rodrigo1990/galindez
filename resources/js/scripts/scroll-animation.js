export  function scrollAnimate(id){
	$('html,body').animate({ scrollTop:$('#'+id+'').offset().top-100  }, 'slow');
}
