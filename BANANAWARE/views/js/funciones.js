function iniciar_Ses(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	apdata = {email : email, pass: pass}
	$.ajax({
		url: "/BANANAWARE/IS.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			var result = JSON.parse(data);
			//var result = data;;
			console.log(data);
			if (result.resul==true) {
				//alert("Sesión iniciada con éxito.");
				window.location.href = "cuenta_user.php";
			}else if(result.errores!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.errores[i]!=undefined) {
						alert(result.errores[i]);
					}
				}
			}else{
				//alert("Por favor rellena todos los campos");
			}
		}
	});
}

function env_email(){
	var email = document.getElementById("email").value;
	var apdata = {email : email};
	$.ajax({
		url: "/BANANAWARE/olvidar_c_email.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			//var result = data;
			if (result.errores!=undefined) {
				for (var i = 0; i < 6; i++) {
					if (result.errores[i]!=undefined) {
						alert(result.errores[i]);
					}
				}
			}else if (result.result==true) {
				alert("Recuperación de contraseña enviado al correo electrónico.");
				window.location.href = "index.php";
			}else{
				alert('Error desconocido');
			}
		}
	});
}

function cambioTipo(radio){
	console.log(radio.value);
	var cod_origen = document.getElementById("cod_origen");
	var centros_opciones = document.getElementById("centros_opciones");
	if (radio.id=="customRadio1") {
		cod_origen.style.display="block";
		centros_opciones.style.display="none";
	}else{
		centros_opciones.style.display="block";
		cod_origen.style.display="none";
	}
}

function verify_Payment(){
	var nom_tit = document.getElementById("nom_tit").value;
	var num_tar = document.getElementById("num_tar").value;
	var cvv = document.getElementById("cvv").value;
	var date = document.getElementById("m_date").value+"/"+document.getElementById("y_date").value;
	apdata = {NomTit : nom_tit, NT: num_tar, cvv : cvv, date: date}
	console.log(apdata);
	$.ajax({
		url: "/BANANAWARE/rpago.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			//var result = data;
			if (result.errores!=undefined) {
				for (var i = 0; i < 6; i++) {
					if (result.errores[i]!=undefined) {
						alert(result.errores[i]);
					}
				}
			}else if (result.result==true) {
				hacer_Pago();
			}else{
				alert('Los datos no están registrados');
			}
		}
	});
}

function val_Info(){
	var Edo_O = document.getElementById('Edo_O').value;
	var Del_O = document.getElementById('Del_O').value;
	var St_O = document.getElementById('St_O').value;
	var Col_O = document.getElementById('Col_O').value;
	var Num_Ex_O = document.getElementById('Num_Ex_O').value;
	var Tel_O = document.getElementById('Tel_O').value;

	var Edo_D = document.getElementById('Edo_D').value;
	var Del_D = document.getElementById('Del_D').value;
	var St_D = document.getElementById('St_D').value;
	var Col_D = document.getElementById('Col_D').value;
	var Num_Ex_D = document.getElementById('Num_Ex_D').value;
	var Tel_D = document.getElementById('Tel_D').value;

	var flag = true;
	if (Edo_O==='' || Del_O==='' || St_O==='' || Col_O==='' || Num_Ex_O==='' || Tel_O==='') {
		alert("Es necesario que se llenen todos los campos:\n en origen");
		flag = false;
	}
	if (Edo_D==='' || Del_D==='' || St_D==='' || Col_D==='' || Num_Ex_D==='' || Tel_D==='') {
		alert("Es necesario que se llenen todos los campos: \n en destino");
	}
	var ex = /[0-9]{16}/
	if (valTelLet(Tel_O)) {
		if (!ex.test(Tel_O)) {
			alert("Número de teléfono invalido: \n en origen");	
			flag=false;
		}
	}else if(valTelLet(Tel_D)){
		if (!ex.test(Tel_D)) {
			alert("Número de teléfono invalido: \n en destino");
			flag=false;
		}	
	}
	if (flag) {
		dir_O = "Calle "+St_O+", Col. "+Col_O+", "+Del_O+", "+Edo_O;
		dir_D = "Calle "+St_D+", Col. "+Col_D+", "+Del_D+", "+Edo_D;
		proc_pago(dir_O,dir_D)
	}
}

function proc_pago(dir_o, dir){
	var sub = parseFloat(document.getElementById("sub_total").innerText.substring(1));
	var fijos = parseFloat(document.getElementById("fijos").innerText.substring(1));;
	var CD = document.getElementById("CD").value;
	var CO = document.getElementById("CO").value;
	var TD = document.getElementById("TD").value;
	var destino = document.getElementById("destino").value;

	var url = "rpago.php?";
	var get = "Sub_T="+sub+"&fijos="+fijos+"&TD="+TD+"&CO="+CO+"&CD="+CD;
	get += "&direccion_d="+dir+"&direccion_o="+dir_o+"&destino="+destino;

	window.location.href= (url+get);

}

function hacer_Pago(){
	var total = parseInt(document.getElementById("Sub_T").value)+parseInt(document.getElementById("fijos").value);
	//console.log(total);
	var CD = document.getElementById("CD").value;
	var CO = document.getElementById("CO").value;
	var dir = document.getElementById("direccion").value;
	var TD = document.getElementById("TD").value;
	var apdata = {costo: total, TD: TD, CO: CO, CD: CD, direccion: dir};
	$.ajax({
		url: "/BANANAWARE/rpago.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			//var result = data;
			if (result.errores!=undefined) {
				for (var i = 0; i < 6; i++) {
					if (result.errores[i]!=undefined) {
						alert(result.errores[i]);
					}
				}
			}else if (result.Code!=undefined) {
				console.log("i do pay the shit xd");
				alert("Su código de envío es:\n"+result.Code+"\nGuárdelo para su rastreo");
				alert("Cita de recolección agendada para el día: "+ result.fecha);
				window.location.href="index.php";
			}else{

				alert('Los datos no están registrados');
			}
		}
	});

}

function addUsu(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var nom_usu = document.getElementById("nom_usu").value;
	var pass_2 = document.getElementById("pass2").value;
	apdata = {email : email, pass: pass, pass2 : pass_2, nom_usu: nom_usu}
	console.log(apdata);
	$.ajax({
		url: "/BANANAWARE/registro.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			var result = JSON.parse(data);
			var resul = data;
				console.log(data);
			if (result.resul==true) {
				alert("El usuario se ha registrado exitosamente.");
				window.location.href = "IS.php";
				//header("index.php");
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}
		}
	});
}

function rec_Con(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var pass_2 = document.getElementById("pass2").value;

	apdata = {email : email, pass: pass, pass2 : pass_2}
	$.ajax({
		url: "/BANANAWARE/olvidar_c_nueva.php",
		method:'POST',
		data: apdata,
		success: function(data) {
//			var result = data;
			var result = JSON.parse(data);
			console.log(data);
			if (result.resul==true) {
				alert("Recuperación de contraseña exitoso.");
				//header("index.php");
				window.location.href = "IS.php";
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}else{
				alert("Es necesario que se llenen todos los campos.");
			}
		}
	});
}


function pre_cotizacion(){
	
	var radioC1 = document.getElementById("customRadio1");
	var cer_or = document.getElementById("Centros");
	var centro_origen = cer_or.options[cer_or.selectedIndex].value;
	var CO = document.getElementById("CO").value;
	var CD = document.getElementById("CD").value;
	var r1 = document.getElementById("radio1");
	var r2 = document.getElementById("radio2");
	var r3 = document.getElementById("radio3");
	var r4 = document.getElementById("radio4");
	var peso = document.getElementById("peso").value;
	var days = "";
	var dist = "";
	
	var radios = [r1,r2,r3,r4];
	 
	var nr = "";

	for (var i = 0; i < 4; i++) {
		if (radios[i].checked) {
			nr = radios[i].value;
		}
	}
	if (!radioC1.checked) {
		var apdata = {
		CO : centro_origen,
		CD : CD,
		size: nr,
		peso : peso
		}
	}else{
		var apdata = {
		CO : CO,
		CD : CD,
		size: nr,
		peso : peso
		}
	}
	console.log(apdata);
	$.ajax({
		url : "/BANANAWARE/prueba.php",
		method: 'POST',
		data: apdata,
		success: function(data){
			//console.log(data);
			var jsondata = JSON.parse(data);
			//console.log(jsondata);
			if (jsondata.error!=undefined) {
				alert(jsondata.error); 
			}else if (jsondata.rows[0].elements[0].distance!=undefined) {
				dist = jsondata.rows[0].elements[0].distance.value/1000;
				days = parseInt(jsondata.rows[0].elements[0].duration.value/86400)+1;
				if (radioC1.checked) {
					var url = "cotizar.php?CO="+CO+"&CD="+CD+"&size="+nr+"&peso="+peso+"&TD="+days+"&Dist="+dist;
				}else{
					var url = "cotizar.php?CO="+centro_origen+"&CD="+CD+"&size="+nr+"&peso="+peso+"&TD="+days+"&Dist="+dist;
				}

				window.location.href = url;
			}else{
				alert("Código postal inexistente.");
			}
		}
	});
	

}

function pre_t_cotizacion(){
	var CO = document.getElementById("CO_T").value;
	var CD = document.getElementById("CD_T").value;

	var apdata = {
		CO : CO,
		CD : CD
	}
	$.ajax({
		url : "/BANANAWARE/prueba2.php",
		method: 'POST',
		data: apdata,
		success: function(data){
			console.log(data);
			var result = JSON.parse(data);
			if (result.error!=undefined) {
				alert(result.error);
			}else if (result.rows[0].elements[0].duration!=undefined){
				var time = result.rows[0].elements[0].duration.value;
				var s_day = 43200; //segundos que tiene un día
				var days = parseInt(time/s_day)+1;
				alert("El paquete llegaría en aproximadamente: "+ days +" día(s)");
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}else{
				alert("código postal inexistente");
			}
		}
	});
}


function cam_servicio(){
	var servicio = document.getElementById("servicio");
	var opciones = parseInt(document.getElementById("opciones").innerText.substring(1));
	var cos_peso = parseInt(document.getElementById("cost_weight").innerText.substring(1));
	var sub = document.getElementById("sub_total");
	var total = document.getElementById("total");
	var sel_servicio = document.getElementById("sel_servicio");
	var fijos = parseFloat(document.getElementById("fijos").innerText.substring(1));

	if (sel_servicio.value==1) {
		servicio.innerHTML="$100";
	}else if(sel_servicio.value==2){
		servicio.innerHTML="$200";
	}else{
		servicio.innerHTML="$0";
	}
	var newServicio = parseInt(servicio.innerText.substring(1));
	var suma = opciones+cos_peso+newServicio;
	sub.innerHTML = "$"+suma;
	suma +=fijos;
	total.innerHTML = "$"+suma;

}

function cam_opciones(){
	var opciones = document.getElementById("opciones");
	var servicio = parseInt(document.getElementById("servicio").innerText.substring(1));
	var cos_peso = parseInt(document.getElementById("cost_weight").innerText.substring(1));
	var sub = document.getElementById("sub_total");
	var total = document.getElementById("total");
	var sel_opciones = document.getElementById("sel_opciones");
	var fijos = parseFloat(document.getElementById("fijos").innerText.substring(1));

	if (sel_opciones.value==1) {
		opciones.innerHTML="$0";
	}else if(sel_opciones.value==2){
		opciones.innerHTML="$100";
	}else if(sel_opciones.value==3){
		opciones.innerHTML="$250";
	}else{
		opciones.innerHTML="$0";
	}
	var newOpciones = parseInt(opciones.innerText.substring(1));
	var suma = servicio+cos_peso+newOpciones;
	sub.innerHTML = "$"+suma;
	suma +=fijos;
	total.innerHTML = "$"+suma;
	
}

function valTelLet(tel){
	var ex = /([0-9]*[a-zA-Z])+/
	return ex.test(tel);
}

function rastrear(){
	var code = document.getElementById("codigo").value;
	window.location.href="rastreo_paq.php?code="+code;
}