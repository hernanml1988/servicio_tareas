<?php 

require ('./conexion.php');


    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $consulta = mysqli_query($conexion, "SELECT * FROM usuario where email ='$email'");
    $consulta = mysqli_fetch_array($consulta);
    
    $password = $consulta[4];

    if($pass = $_POST['pass'] == $password){
        
            header("Location: ../vista_inicio.php?nombre=".$consulta[1]."&id=".$consulta[0]."&role=".$consulta[2]);
        
    }
 


?>