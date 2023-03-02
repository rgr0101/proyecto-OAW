<?php
include('dbconexion.php');

if ($_POST['ecnolog'] != '') {
    $categoria = $_POST['ecnolog'];
    $datab = "noticias";
    $buscar = mysqli_real_escape_string($connection, $categoria);
    $sql = "SELECT * FROM noti_db WHERE categoria like '%" . $categoria . "%' OR fuente like '%" . $categoria . "%'";
    //$sql = "SELECT * FROM noti_db";

    $datab = mysqli_select_db($connection, $datab);
    if (conectardb($datab)) {
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="post" style="background-image: url('<?php echo $row['imglink'] ?>');">
                    <div class="post-content">
                        <h4 class="fuente">
                            <?php echo $row['fuente']; ?>
                        </h4>
                        <h4 class="fecha">
                            <?php echo $row['fecha']; ?>
                        </h4>
                        <h4 class="fecha">
                            <?php echo $row['categoria']; ?>
                        </h4>
                        <h2 class="post-titulo">
                            <?php echo $row["titulo"]; ?>
                        </h2>
                        <h3 class="descripcion">
                            <?php echo $row["descripcion"]; ?> <a class="leer-mas" target="blank"
                                href="<?php echo $row["link"]; ?>">Continuar leyendo...</a>
                        </h3>
                    </div>
                </div>
                <?php
            }
            mysqli_close($connection);
        } else {
            echo "<h3>No hay resultados para su búsqueda. </h3>";
        }
    }
} else {
    echo "<h3>Ingrese su búsqueda.</h3>";
}

?>