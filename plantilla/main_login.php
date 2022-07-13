<div class="col-9">
    <section class="formulario_login">
        <h2>Formulario de Login</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="user">Nombre de usuario</label>
                <input type="test" class="form-control" id="user" name="user"  placeholder="tu nombre de usuario">
                <small id="userHelp" class="form-text text-muted">Introduce tu nombre de usuario</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        //como saber si se ha enviado el formulario y es donde se almacenan los resultados 
        if ($_POST) {
            //para indicar que el formulario se ha enviado$usuario
            #echo "El formulario se ha enviado";
            $usuario = $_POST ["user"];
            $password = $_POST["password"];

            //esto es para comprobar si se guardan los datos de nombre y contraseña
            #echo "$usuario - $password";

            if ($usuario == "user" && $password == "1234") {
                $_SESSION["usuario"] = "user";
                $_SESSION["password"] = "1234";

                /*Me lleva a la pagina de inicio */
                header("Location: index.php");
                
            }
            else {
               echo "Hay un error en sus datos";
            }
        }
        ?>
    </section>
</div>