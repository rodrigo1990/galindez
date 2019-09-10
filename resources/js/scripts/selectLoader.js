window.selectLoader = function(){
	var v = $("#perfil-evento").val();




	switch(v) {
	 

	  case 'Social':
	  	$("#tipo-evento option").not('option[value=null]').css('display','none');
	    $("#tipo-evento option[value=Casamiento]").css('display','block');
		$("#tipo-evento option[value=Fiesta_de_15]").css('display','block');
		$("#tipo-evento option[value=Bar-Bar_mitzvah]").css('display','block');
		$("#tipo-evento option[value=Cumpleaños]").css('display','block');
		$("#tipo-evento option[value=Civil]").css('display','block');
		$("#tipo-evento option[value=Bautismo]").css('display','block');
		$("#tipo-evento option[value=Otros]").css('display','block');
	    break;
	 

	  case 'Corporativo':
	  	$("#tipo-evento option").not('option[value=null]').css('display','none');
	    $("#tipo-evento option[value=Fiesta_de_fin_de_año]").css('display','block');
		$("#tipo-evento option[value=Evento_publicitario]").css('display','block');
		$("#tipo-evento option[value=Jornada_laboral]").css('display','block');
		$("#tipo-evento option[value=Otros]").css('display','block');
	    break;


	    case 'Fundacion-ONG':
	  	$("#tipo-evento option").not('option[value=null]').css('display','none');
	    $("#tipo-evento option[value=Fundación]").css('display','block');
		$("#tipo-evento option[value=ONG]").css('display','block');

	    break;	

	  default:
	  	$("#tipo-evento option").not('option[value=null]').css('display','none');
	  break;    
	}


}
