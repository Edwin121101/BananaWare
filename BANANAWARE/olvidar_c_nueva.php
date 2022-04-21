<?php session_start();

    /*if(isset($_SESSION['usuario'])){
        header('Location: index.php');
    }*/

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $result = ["resul"=>false];
        require 'Funciones.php';

        if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass2'])) {
            $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
            $pass = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
            $pass2 = filter_var($_POST['pass2'],FILTER_SANITIZE_STRING);
            $errores = '';

            $email = filtrado($email);
            $pass = filtrado($pass);
            $pass2 = filtrado($pass2);

            if(empty($email) || empty($pass) || empty($pass2)){
                $result["error"][0]="Por favor rellene todos los campos";
            }elseif (valPass($pass)) {
                $result["error"][1]="Formato inválido de contraseña\nLa contraseña debe tener al menos 6 carácteres, una mayúscula, una minúscula, un número y un símbolo especial";
            }else{
                $conexion = conexion();
                if ($conexion) {
                    $statement = $conexion->prepare('SELECT * FROM usuario Where email = :email LIMIT 1');
                    $resultado = $statement->execute(array(':email' => $email));
                    $resultado = $statement->fetch();   
                } else {
                    $result["error"][2]="BD muerta";
                }
                $cero = (int) 0;
                if($resultado == false){
                    $result["error"][3]="La cuenta no existe";
                }
                $pass = hash('sha512', $pass);
                $pass2 = hash('sha512', $pass2);

                if($pass != $pass2){
                    $result["error"][4]="Las contraseñas no coinciden";
                }
            }  
            $flag=false; 
            if (isset($result["error"])) {
                $flag = true;
            }
            if($flag != true){

                  $conexion2 = conexion();
                  if ($conexion2) {
                  $statement2 = $conexion2->prepare('UPDATE usuario SET pass =:pass WHERE email=:email');
                  $statement2->execute(array(':email' => $email,':pass' => $pass));
                  } else {
                    echo "No se realizo la conexion";
                    $errores.='<li>No se realizo la conexion</li>';
                  }
                  $result["resul"] = true;
            }
        }else{
            $result["error"][5] = "deja la consola";
        }
        echo json_encode($result);
    }else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if (isset($_GET['email'])) {
            $email = $_GET['email'];
            require('views/olvidar_c_nueva.view.php');
        }else{
            header("Location: index.php");
        }
    }

?>