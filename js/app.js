	
var btnEnviar = $("#btnEnviar");
btnEnviar.on("click",clickEnviar);
var contador = 0;	
var contadorPistas =0;
var imgCorrecta1=false;
var imgCorrecta2=false;
var imgCorrecta3=false;
function clickEnviar (argument) {
	contador = 0;

	/*if($("#pregunta1 input:checked").val()==null){
		alert("Pregunta 1 sin responder");
		return;
	}
	if($("#pregunta2 input:checked").val()==null){
		alert("Pregunta 2 sin responder");
		return;
	}
	if($("#pregunta3 input:checked").val()==null){
		alert("Pregunta 3 sin responder");
		return;
	}
	if($("#pregunta4 input:checked").val()==null){
		alert("Pregunta 4 sin responder");
		return;
	}
	if($("#pregunta5 input:checked").val()==null){
		alert("Pregunta 5 sin responder");
		return;
	}*/

	if($( "#pregunta1 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta2 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta3 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta4 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta5 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if(imgCorrecta1==true){
		contador+=0.625;
	}
	if(imgCorrecta2==true){
		contador+=0.625;
	}
	if(imgCorrecta3==true){
		contador+=0.625;
	}

	var preg=confirm ("¿Estas seguro?");
	if (preg==true){
		if(contador.toString().substring(0,4)=="4.99"||contador=="5"){
			contador = "5.00";
		}
		$("body").fadeOut("slow",function(){
			$("body").html("<div id='resultado'>Tu puntaje es: <span class='blanco'>"+contador.toString().substring(0,4)+"</span><br>Tu tiempo es: <span class='blanco'> "+parseInt(120-cc)+" segundos</span></div>").fadeIn("fast");
			clearTimeout(timeOut);
		});
		
	}
	else{
	return false;
	}





}

$(".pregunta .btnPista").on("click",clickBtnPista);
function clickBtnPista(){
	var padre = $(this).parent();
	$("#"+padre.attr("id")+" .pista").slideDown("slow");
	contadorPistas++;
	if(contadorPistas==3){
		$(".btnPista").attr("disabled", "disabled");
	}
	
}
$(".btnCerrarPista").on("click",clickCerrarPista);
function clickCerrarPista(){
	$(this).parent().slideUp("slow");
}


$("#pregunta6 .imagen").on("mousedown",function (){
	var img = $(this);
	$("#pregunta6 .imagen").removeClass("imgSeleccionada");
	img.addClass("imgSeleccionada");
	
	if(img.attr("value")=="correcta"){
	
		imgCorrecta1=true;
		
	}else{
	
		imgCorrecta1=false;
	
	}
});


$("#pregunta7 .imagen").on("mousedown",function (){
	var img = $(this);
	$("#pregunta7 .imagen").removeClass("imgSeleccionada");
	img.addClass("imgSeleccionada");
	
	if(img.attr("value")=="correcta"){
	
		imgCorrecta2=true;
		
	}else{
	
		imgCorrecta2=false;
	
	}
});

$("#pregunta8 .imagen").on("mousedown",function (){
	var img = $(this);
	$("#pregunta8 .imagen").removeClass("imgSeleccionada");
	img.addClass("imgSeleccionada");
	
	if(img.attr("value")=="correcta"){
	
		imgCorrecta3=true;
		
	}else{
	
		imgCorrecta3=false;
	
	}
});



function seAgotoElTiempo(){
	 if($( "#pregunta1 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta2 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta3 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta4 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta5 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if(imgCorrecta1==true){
		contador+=0.625;
	}
	if(imgCorrecta2==true){
		contador+=0.625;
	}
	if(imgCorrecta3==true){
		contador+=0.625;
	}
	if(contador.toString().substring(0,4)=="4.99"||contador=="5")
		contador = "5.00";
	$("body").fadeOut("slow",function(){
		$("body").html("<div id='resultado'>Tu puntaje es: <span class='blanco'>"+contador.toString().substring(0,4)+"</span></div>").fadeIn("fast");
	});
}

	var cc = 120;
	var timeOut = null;
	function cuenta()
	{
	  cc--;
	  $("#data").html(cc);

	  if(cc > 0)
	  {
		if(cc<=80){
			$("#ctnTiempo").css("color","yellow");
			$(".imgTiempo").addClass("oculta");
			$("#t2").removeClass("oculta");
		}
		if(cc<=40){
			$("#ctnTiempo").css("color","orange");
			$(".imgTiempo").addClass("oculta");
			$("#t3").removeClass("oculta");
		}
		if(cc<=20){
			$("#ctnTiempo").css("color","red");
			$(".imgTiempo").addClass("oculta");
			$("#t4").removeClass("oculta");
		}
		$("#tiempo").html(cc+" segundos");
		console.log(cc);
		 timeOut=setTimeout(function() {
		  cuenta();
		}, 1000);
	  }else
	  {
	   seAgotoElTiempo();
	  }
	}

cuenta();	
var btnEnviar = $("#btnEnviar");
btnEnviar.on("click",clickEnviar);
var contador = 0;	
var contadorPistas =0;
var imgCorrecta1=false;
var imgCorrecta2=false;
var imgCorrecta3=false;
function clickEnviar (argument) {
contador = 0;

/*if($("#pregunta1 input:checked").val()==null){
	alert("Pregunta 1 sin responder");
	return;
}
if($("#pregunta2 input:checked").val()==null){
	alert("Pregunta 2 sin responder");
	return;
}
if($("#pregunta3 input:checked").val()==null){
	alert("Pregunta 3 sin responder");
	return;
}
if($("#pregunta4 input:checked").val()==null){
	alert("Pregunta 4 sin responder");
	return;
}
if($("#pregunta5 input:checked").val()==null){
	alert("Pregunta 5 sin responder");
	return;
}*/

if($( "#pregunta1 input:checked" ).val()=="correcta"){
	contador+=0.625;
}
if($( "#pregunta2 input:checked" ).val()=="correcta"){
	contador+=0.625;
}
if($( "#pregunta3 input:checked" ).val()=="correcta"){
	contador+=0.625;
}
if($( "#pregunta4 input:checked" ).val()=="correcta"){
	contador+=0.625;
}
if($( "#pregunta5 input:checked" ).val()=="correcta"){
	contador+=0.625;
}
if(imgCorrecta1==true){
	contador+=0.625;
}
if(imgCorrecta2==true){
	contador+=0.625;
}
if(imgCorrecta3==true){
	contador+=0.625;
}

var preg=confirm ("¿Estas seguro?");
if (preg==true){
	if(contador.toString().substring(0,4)=="4.99"||contador=="5"){
		contador = "5.00";
	}
	$("body").fadeOut("slow",function(){
		$("body").html("<div id='resultado'>Tu puntaje es: <span class='blanco'>"+contador.toString().substring(0,4)+"</span><br>Tu tiempo es: <span class='blanco'> "+parseInt(120-cc)+" segundos</span><p>          <a class='btn btn-lg btn-success' href='inicio.php' role='button'>Regresar</a></p></div>").fadeIn("fast");
		clearTimeout(timeOut);
	});
	
}
else{
return false;
}





}

$(".pregunta .btnPista").on("click",clickBtnPista);
function clickBtnPista(){
	var padre = $(this).parent();
	$("#"+padre.attr("id")+" .pista").slideDown("slow");
	contadorPistas++;
	if(contadorPistas==3){
		$(".btnPista").attr("disabled", "disabled");
	}
	
}
$(".btnCerrarPista").on("click",clickCerrarPista);
function clickCerrarPista(){
	$(this).parent().slideUp("slow");
}


$("#pregunta6 .imagen").on("mousedown",function (){
	var img = $(this);
	$("#pregunta6 .imagen").removeClass("imgSeleccionada");
	img.addClass("imgSeleccionada");
	
	if(img.attr("value")=="correcta"){
	
		imgCorrecta1=true;
		
	}else{
	
		imgCorrecta1=false;
	
	}
});


$("#pregunta7 .imagen").on("mousedown",function (){
	var img = $(this);
	$("#pregunta7 .imagen").removeClass("imgSeleccionada");
	img.addClass("imgSeleccionada");
	
	if(img.attr("value")=="correcta"){
	
		imgCorrecta2=true;
		
	}else{
	
		imgCorrecta2=false;
	
	}
});

$("#pregunta8 .imagen").on("mousedown",function (){
	var img = $(this);
	$("#pregunta8 .imagen").removeClass("imgSeleccionada");
	img.addClass("imgSeleccionada");
	
	if(img.attr("value")=="correcta"){
	
		imgCorrecta3=true;
		
	}else{
	
		imgCorrecta3=false;
	
	}
});



function seAgotoElTiempo(){
	 if($( "#pregunta1 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta2 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta3 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta4 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if($( "#pregunta5 input:checked" ).val()=="correcta"){
		contador+=0.625;
	}
	if(imgCorrecta1==true){
		contador+=0.625;
	}
	if(imgCorrecta2==true){
		contador+=0.625;
	}
	if(imgCorrecta3==true){
		contador+=0.625;
	}
	if(contador.toString().substring(0,4)=="4.99"||contador=="5")
		contador = "5.00";
	$("body").fadeOut("slow",function(){
		$("body").html("<div id='resultado'>Tu puntaje es: <span class='blanco'>"+contador.toString().substring(0,4)+"</span></div>").fadeIn("fast");
	});
}

	var cc = 120;
	var timeOut = null;
	function cuenta()
	{
	  cc--;
	  $("#data").html(cc);

	  if(cc > 0)
	  {
		if(cc<=80){
			$("#ctnTiempo").css("color","yellow");
			$(".imgTiempo").addClass("oculta");
			$("#t2").removeClass("oculta");
		}
		if(cc<=40){
			$("#ctnTiempo").css("color","orange");
			$(".imgTiempo").addClass("oculta");
			$("#t3").removeClass("oculta");
		}
		if(cc<=20){
			$("#ctnTiempo").css("color","red");
			$(".imgTiempo").addClass("oculta");
			$("#t4").removeClass("oculta");
		}
		$("#tiempo").html(cc+" segundos");
		console.log(cc);
		 timeOut=setTimeout(function() {
		  cuenta();
		}, 1000);
	  }else
	  {
	   seAgotoElTiempo();
	  }
	}

cuenta();