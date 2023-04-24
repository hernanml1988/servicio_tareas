<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuracion</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- libreria iconos -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="estilos/estilosMenu.css">
    <link rel="stylesheet" href="estilos/configuracion.css">
</head>
<body>

    <?php include("layouts/menu.php"); ?>
           
    <div class="container">
        <div class="container_titulo">          

        </div>



        <div class="container_content">
            <div class="btn_config" type="button"  data-bs-toggle="modal" data-bs-target="#crearUsuario" >
                <i class='bx bxs-user bx-lg'></i>
                <h4>Crear Usuario</h2>
                 
            </div>
            <div class="btn_config" type="button"  data-bs-toggle="modal" data-bs-target="#crearUsuario" >
                <h4>Otros</h2>
                 
            </div>
        </div>        

    </div>
    

            <!-- modal crear Usuario-->
            <div class="modal fade" id="crearUsuario" tabindex="-1" aria-labelledby="crearUsuario" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Crear Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="data_form">
                            <label for="">Ingrese Nombre</label>                            
                            <input type="text" placeholder="Nombre">
                            </div>
                            <div class="data_form">
                            <label for="">Ingrese Correo</label>
                            <input type="text" placeholder="Correo">
                            </div>
                            <div class="data_form">
                            <label for="">Ingrese Nombre de Usuario</label>
                            <input type="text" placeholder="Nombre Usuario">
                            </div>
                            <div class="data_form">
                            <label for="">Ingrese Role</label>
                            <input type="text" placeholder="role">
                            </div>
                            <div class="data_form">
                            <label for="">Ingrese Password</label>
                            <input type="text" placeholder="password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                    </div>
                </div>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html> 