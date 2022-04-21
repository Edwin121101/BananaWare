<?php session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['email']) && isset($_POST['pass'])) {
            require 'funciones.php';
            $resul = ["resul"=>false];
            $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
            $pass = $_POST['pass'];
            $pass = hash('sha512',$pass);
            $errores = '';
            //debería funcionar para validar emails
            /*if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9]+)+(\.)[a-zA-Z]{2,}$/",$email){
            }*/
            if(($email=="") or $pass==""){
                $result["error"][0]="Es necesario que se llenen todos los campos.";
            }
            if (!isset($result["error"])) {
                    $conexion = conexion();
                    if ($conexion) {
                        $statement = $conexion->prepare('SELECT * FROM usuario WHERE email = :email');
                        $statement->execute(array(':email' => $email));
                        $resultado = $statement->fetch();
                        if($resultado != false){
                            if ($resultado[1]!=$pass) {
                                $resul['errores'][1]="La contraseña ingresada es incorrecta.";
                            }else{
                                $_SESSION['email'] = $email;
                                $_SESSION['usuario'] = $resultado[2];
                                $resul['resul']=true;
                            }
                            //header('Location: index.php');
                        }else{
                            $resul["errores"][1]= "Correo electrónico no encontrado.";
                        }

                    }else {
                        $resul["errores"][2]= "Error desconocido";
                    }

                }else{
                    $resul["errores"][0]= "Es necesario que se llenen todos los campos.";
                }
        }
        echo json_encode($resul);
    }else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        require 'views/IS.view.php';
    }
    
?>