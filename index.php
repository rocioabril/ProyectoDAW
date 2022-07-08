<!--Funciones usadas en php-->
<?php
    include("funciones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilos.css">
</head>



<body class="container">
    <!--HEADER-->
    <?php
    include("header.php");
    ?>

    <!--FIN HEADER-->

    <!--MAIN-->


    <main class="row">

        <!--MAIN_HOME-->
        <?php
        include("mainHome.php");
        ?>
        <!--MAIN_HOME-->


        <!--ASIDE-->
        <?php
        include("aside.php");
        ?>
        <!--FIN ASIDE-->


    </main>
    <!--FIN MAIN-->


    <!--FOOTER-->
    <?php
    include("footer.php");
    ?>
    <!--FIN FOOTER-->


</body>

</html>