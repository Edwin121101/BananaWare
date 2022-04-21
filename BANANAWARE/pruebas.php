<?php session_start();
require 'funciones.php';
			//$email = $_SESSION['usuario'];
			//$costo = $_GET['costo'];
			//$cp_o = $_GET['CO'];
			//$cp_d = $_GET['CD'];
			if ((date('j')+$_GET['TD'])>date('t')) {
				$date = strval(date('j')+$_GET['TD']-date('t'));
				if (date('n')+1>12) {
					$date= $date."/01";
				}else{
					$date+= date('n');
				}

			}else{
				$date = strval(strval(date('j')+$_GET['TD']))."/".date('n');
			}
			echo $date;
 ?>