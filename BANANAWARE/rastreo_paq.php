<?php session_start();
	if ($_SERVER['REQUEST_METHOD']=='GET') {
		if (isset($_GET['code'])) {
			require 'funciones.php';
			$conexion = conexion();
			$statement = $conexion->prepare('SELECT estado_envio FROM pedido WHERE id_pedido=:code');
			$statement->execute(array(':code'=>$_GET['code']));
			$result = $statement->fetch();
			if ($result!=false) {
				$tipo = $result[0];
				switch ($tipo) {
				case 0:
					$salida = 1;
					$camino = 0;
					$entregado = 0;
					break;
				case 1:
					$salida = 0;
					$camino = 1;
					$entregado = 0;
					break;
				case 2:
					$salida = 0;
					$camino = 0;
					$entregado = 1;
					break;

				default:
					$salida = 0;
					$camino = 0;
					$entregado= 0;
					break;
			


				}
				
			}else{
				$error=true;
			}

			require('views/rastreo_paq.view.php');
			
		}else{
			
		}
	}
?>