<?php session_start();
	if ($_SERVER['REQUEST_METHOD']=='GET') {
		
		$peso_vol=0;
		$cost_weight=0;
    if (!isset($_GET['size'])) {
      $size= "none";
    }else{
      $size = $_GET['size'];
    }
    if (!isset($_GET['peso'])) {
      $peso= 0;
    }else{
      $peso = $_GET['peso'];
    }
    if (!isset($_GET['CO'])) {
      $CO= 0;
    }else{
      $CO = $_GET['CO'];
    }
    if (!isset($_GET['CD'])) {
      $CD= 0;
    }else{
      $CD = $_GET['CD'];
    }
    
		if ($size=="little") {
              $peso_vol = 27/40;
            }else if($size=="medium"){
              $peso_vol = 25/8;
            }else if($size=="big"){
              $peso_vol = 64/5;
            }else if($size=="envelope"){
              $peso_vol = 50;
            }
    if ($peso>30) {
      $cost_weight = 250;
    }else {
      $cost_weight = 100;
    }
    if (!isset($_GET['Dist'])) {
      $fijos = 0;      
    }else{
      $fijos= round((($peso_vol)*($_GET['Dist'])),2,PHP_ROUND_HALF_UP);
    }
		$sub=$cost_weight+100;
		$total=$sub+$fijos;

		require ('views/cotizar.view.php');


	}else if($_SERVER['REQUEST_METHOD']='POST'){
		$result = ["resul"=>false];
		$CO = $_POST['CO'];
        $CD = $_POST['CD'];
        $handler = curl_init();

        if ($CO=="" or $CD=="") {
            $result = ["error"=>"mensaje 22"];
            echo json_encode($result);
        }else{
            curl_setopt($handler, CURLOPT_URL, "https://maps.googleapis.com/maps/api/distancematrix/json?origins=Mexico+".$CO."&destinations=Mexico+".$CD."&key=AIzaSyBKg1E6WSklgCXN2Oyqm9ahBeqSZ56IaMw");

            curl_setopt($handler, CURLOPT_RETURNTRANSFER, false);
            curl_exec($handler);
        }
	}
 ?>