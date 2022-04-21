<?php session_start();
    //header('Access-Control-Allow-Origin: *');
    require 'funciones.php';
    if ($_SERVER['REQUEST_METHOD']=='GET') {
       require('views/pruebea.view.php');
    }else{
        $CO = $_POST['CO'];
        $CD = $_POST['CD'];
        
        $handler = curl_init();

        if ($CO=="" or $CD=="") {
            $result = ["error"=>"Es necesario que se llenen todos los campos."];
            echo json_encode($result);
        }else if (valPC($CO) or valPC($CD)) {
            $result = ["error"=>"Código postal inexistente."];
        }else{
            $flag = true;
            /*switch ($size) {
                case "little":
                    if ($peso>15) $result = ["error"=>"Mensaje peso/tamaño"];
                    break;
                case "medium":
                    if ($peso>15) $result = ["error"=>"Mensaje peso/tamaño"];
                    break;
                case "big":
                    if ($peso>15) $result = ["error"=>"Mensaje peso/tamaño"];
                    break;
                case "little":
                    if ($peso>15) $result = ["error"=>"Mensaje peso/tamaño"];
                    break;
                case "envelope":
                    if ($peso>15) $result = ["error"=>"Mensaje peso/tamaño"];
                    break;
                default:
                    $result = ["error"=>"Mensaje peso/tamaño"];
                    break;
                echo json_encode($result);
            }*/
            if ($flag) {
                curl_setopt($handler, CURLOPT_URL, "https://maps.googleapis.com/maps/api/distancematrix/json?origins=Mexico+".$CO."&destinations=Mexico+".$CD."&key=AIzaSyBKg1E6WSklgCXN2Oyqm9ahBeqSZ56IaMw");

                curl_setopt($handler, CURLOPT_RETURNTRANSFER, false);
                curl_exec($handler);
            }
        }
/*    if (true==json_decode(curl_exec($handler),true)) {
        echo "verda'";
    }

    /*foreach ($kekw as $key ) {
        echo $key."<br>";
    }*/

    //curl_close($handler);
    }
?>
