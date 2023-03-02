<?php
include('dbconexion.php');
$datab = "noticias";

$sql = "SELECT * FROM noti_db ORDER BY fecha DESC";

$datab = mysqli_select_db($connection, $datab);
if (conectardb($datab)) {
    $resultado = mysqli_query($connection, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) { ?>
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
        echo "<h3>No hay resultados.</h3>";
    }
}

?>