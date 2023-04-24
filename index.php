<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>

    <div id="container_login">
        <div id="cabecera_form">
            <h1>Login Usuario</h1>
        </div>
        <div id="form">
            <form action="controller/IngresarLoginController.php" method="post">
                <div>
                    <input type="email" name="email" id="email_login" placeholder="Ingrese su email" required>
                </div>
                <div>
                    <input type="password" name="pass" id="pass_login" placeholder="Ingrese su clave" required>
                </div>
                <div>
                    <button type="submit" id="btn_ingresar" class="btn btn-success">Ingresar</button>
                </div>

            </form>
        </div>
    </div>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html> 