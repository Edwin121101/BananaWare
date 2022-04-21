<?php session_start();
	if (isset($_SESSION['email'])) {
		if ($_SERVER['REQUEST_METHOD']=='GET') {
			if (isset($_GET['Sub_T']) and isset($_GET['fijos']) and isset($_GET['TD']) and isset($_GET['CO']) and isset($_GET['CD']) and isset($_GET['direccion'])) {
				
			}
			require('views/rpago.view.php');	
		}else if($_SERVER['REQUEST_METHOD']=='POST'){
			if (isset($_POST['NT']) or isset($_POST['cvv']) or isset($_POST['NomTit']) or isset($_POST['date'])) {
				require 'funciones.php';
				$nt = $_POST['NT'];
				$cvv = $_POST['cvv'];
				$nomTit = $_POST['NomTit'];
				$date = $_POST['date']; 
				$email = "villegas9@gmail.com";
				$result = ["result"=>false];
				//$email = $_SESSION['email'];
				if ($nt=='' or $cvv=='' or $nomTit=='') {
					$result["errores"][0]="Es necesario que se llenen todos los campos";
				}else{
					if (valNT($nt)) {
						$result["errores"][1]="Número de tarjeta incorrecto";
					}
					if (valNom($nomTit)){
						$result["errores"][2]="El nombre no cumple con las especificaciones";
					}
					if(valCVV($cvv)){
						$result["errores"][3]="El CVV no cumple con la especificación requerida";
					}
				}
				if(!isset($result["errores"])){
					/* aquí se deberían de hacer cosas, pero no tengo idea de que hacer*/
					$conexion = conexion();
					$statement = $conexion->prepare('SELECT * FROM datos_tarjeta WHERE email=:email');
					$statement->execute(array(":email"=>$email));
					$res = $statement->fetch();
					if ($res!=false) {
						if ($nt==$res[2] and $cvv==$res[3] and $nomTit==$res[1] and $date==$res[4]){
							$result["result"]=true;
						}
						//echo json_encode(array("name"=>($nt==$res[2])));
					}else{
						echo "string";
					}
				}
				echo json_encode($result);
			}else if(isset($_POST['costo']) and isset($_POST['TD']) and isset($_POST['CO']) and isset($_POST['CD']) and isset($_POST['direccion'])){
			require 'funciones.php';
			$email = "roko118@hotmail.com";
//			$email = $_SESSION['email'];
			$costo = $_POST['costo'];
			$cp_o = $_POST['CO'];
			$cp_d = $_POST['CD'];
			$addres=$_POST['direccion'];
			if ((date('j')+$_POST['TD'])>date('t')) {
				$date = strval(date('j')+$_POST['TD']-date('t'));
				if (date('n')+1>12) {
					$date= (date('Y')+1)."/01/".$date;
				}else{
					$date= date('Y')."/".date('m').$date;
				}
			}else{
				$date = date('Y')."/".date('m')."/".strval(strval(date('j')+$_POST['TD']));
			}
			$conexion = conexion();

			$query = 'SELECT count(*) FROM pedido WHERE email=:email';
			$statement = $conexion->prepare($query);
			$statement->execute(array(':email'=>$email));
			$num_ped = $statement->fetch();
			if (($num_ped[0])<8) {
				$fn_id = "00".($num_ped[0]+1);
			}else if (($num_ped[0])<98) {
				$fn_id = "0".($num_ped[0]+1);
			}else{
				$fn_id = ($num_ped[0]+1);
			}

			$id_pedido = date('d').date('m').date('y').strtoupper(substr($email, 0,3)).($fn_id);

			
			$query = 'INSERT INTO pedido (id_pedido, email, costo, estado_envio, fecha_entrega,direccion_entrega,CP_O,CP_D) VALUES (:id_pedido,:email,:costo,:estado_envio,:fecha_entrega,:direccion,:cp_o, :cp_d)';
			$statement = $conexion->prepare($query);
			$statement->execute(array(':id_pedido'=>$id_pedido,':email'=>$email,':costo'=>$costo,':estado_envio'=>0,':fecha_entrega'=>$date,':direccion'=>$addres,':cp_o'=>$cp_o,':cp_d'=>$cp_d));
		
			echo json_encode(array("Code"=>$id_pedido,"fecha"=>$date));

			}
		}else{
				echo json_encode(array("errores"=>"ningún post"));
			}
	}else{
		require('views/rpago.view.php');
	}

	/*
	INSERT INTO datos_tarjeta (email,nombre_titular,num_tar,cvv,fecha_cad) 
VALUES ("roko118@hotmail.com","nombre generico alguno", "1245124512451245","666","01/23")
	*/

 ?>
