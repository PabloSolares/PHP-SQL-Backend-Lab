<?php 
  
  if (isset($_POST)) {
      //CONECION A LA BASE DE DATOS
      require_once 'includes/conexion.php';
     
      $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
      $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,  $_POST['apellidos']) : false;
      $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email']))  : false;
      

      //Array errores
      $errores = array();
      //Validar datos
      //VALIDAR NOMBRE
      if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
          $nombre_validado = true;
      }else{
          $errores['nombre'] = "El nombre no es valido";
      }

      //VALIDAR APELLIDOS
      if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)){
          $apellidos_validado = true;
      }else{
          $errores['apellidos'] = "El apellido no es valido";
      }


      //VALIDAR EMAIL
      if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
          $email_validado = true;
      }else{
          $errores['email'] = "El email no es valido";
      }

      
        
      
      $guardar_usuario = false;
      if(count($errores) == 0){
          $usuario = $_SESSION['usuario'];
          $guardar_usuario = true;

          //cifrar la contraseña
          $sql = "SELECT id email FROM usuarios WHERE email = 'email'";
          $isset_email = mysqli_query($db,$sql);
            $isset_user = mysqli_fetch_assoc($isset_email);
        if($isset_user['id'] == $usuario['id'] || empty($isset_user)){

        
          //Actualizar usuarios en la base de datos
        $usuario = $_SESSION['usuario'];
          $sql = "UPDATE usuarios SET NOMBRE = '$nombre', 
                    apellidos = '$apellidos',
                    email = '$email'
                    WHERE id = ".$usuario['id'];
          $guardar = mysqli_query($db, $sql);
          
        
        
          if($guardar){
              $_SESSION['usuario']['nombre'] = $nombre;
              $_SESSION['usuario']['apellidos'] = $apellidos;
              $_SESSION['usuario']['email'] = $email;

              $_SESSION['completado'] = "Tus dados se han actualizado con exito";
          }else{
              $_SESSION['errores']['general'] = "Fallo al actualizar el usaurio!!";
          }
      }else{
          $_SESSION['errores'] = $errores;
          
      }

    }else{
        $_SESSION['errores']['general'] = "El usuario ya existe";

    }



  }

  header('Location: mis-datos.php');