<header class="row">
    <div class="col-2">
        <img class="logo" src="./img/logo.png" alt="logo" title="logo">
    </div>
    <div class="col-10">
        <ul class="menu_superior">
            <li class="menu_sup_item">
                <a href="index.php">Inicio</a>
            </li>
            <li class="menu_sup_item">
                <a href="#series">Series</a>
            </li>
            <li class="menu_sup_item">
                <a href="">Opiniones</a>
            </li>
            <li class="menu_sup_item">
                <?php
            if (isset($_SESSION["usuario"])) {
                echo "<b>Hola, " . $_SESSION["usuario"] . "</b><br>";
                echo "<a href='logout.php'>Logout</a>";
             }
             else{
                ?>
                <!-- Button trigger modal -->
                <a href="login.php"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                Iniciar Sesión
                </a>
               <!-- echo "<a href='login.php'>login</a>";-->
             <?php }
             ?>
            </li>
        </ul>
    </div>
    
</header>

<?php include("login.php"); ?>