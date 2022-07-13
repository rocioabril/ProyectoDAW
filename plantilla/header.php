<header class="row">
    <div class="col-2">
        <img class="logo" src="./img/logo.png" alt="logo" title="logo">
    </div>
    <div class="col-8">
        <ul class="menu_superior">
            <li class="menu_sup_item">
                <a href="index.php">Inicio</a>
            </li>
            <li class="menu_sup_item">
                <a href="">Series</a>
            </li>
            <li class="menu_sup_item">
                <a href="">Peliculas</a>
            </li>
            <li class="menu_sup_item">
                <a href="">Opiniones</a>
            </li>
            <li class="menu_sup_item">
                <?php
            if (isset($_SESSION["usuario"])) {
                echo "<a href='logout.php'>logout</a>";
             }
             else{
                echo "<a href='login.php'>login</a>";
             }
             ?>
            </li>
        </ul>
    </div>
    <div class="col-2 login">
        <i class="bi bi-person-workspace"></i>
        
        <?php if (isset($_SESSION["usuario"])) {
            echo "<p>Hola, " . $_SESSION["usuario"] . "</p>";
        }
        ?>
    </div>
</header>