<?php

if ($_POST['feedurl'] != '') {
  $url = $_POST['feedurl'];
}

$invalida = false;

if (@simplexml_load_file($url)) {
  $feeds = simplexml_load_file($url);
} else {
  $invalida = true;
  echo "URL INVALIDA. INGRESE UNA URL VALIDA";
}

$i = 0;
if (!empty($feeds)) {

  include('dbconexion.php');
  $datab = "noticias";
  $sitelink = $feeds->channel->link;
  if (is_array($feeds) || is_object($feeds)) {

    foreach ($feeds->channel->item as $item) {

      $title = $item->title;
      $link = $item->link;
      $description = $item->description;
      $categoria = $item->category;
      $db = mysqli_select_db($connection, $datab);

      if (conectardb($db)) {
        if (isset($item->enclosure['url'][0])) {
          $img = mysqli_real_escape_string($connection, $item->enclosure['url'][0]);
        } else {
          $img = null;
        }
        $titulo = mysqli_real_escape_string($connection, $item->title);
        $link2 = mysqli_real_escape_string($connection, $item->link);
        $descripcion = mysqli_real_escape_string($connection, $item->description);
        $categoria = mysqli_real_escape_string($connection, $item->category);
        $postDate = date('Y-m-d H:i:s', strtotime($item->pubDate));
        $fuente = mysqli_real_escape_string($connection, $feeds->channel->title);

        $sql = "INSERT INTO noti_db (titulo, link, descripcion, imglink, fecha, fuente, categoria) VALUES ('$titulo', '$link2', '$descripcion', '$img', '$postDate', '$fuente', '$categoria')";

        if (mysqli_query($connection, $sql)) {
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }

      }

      if ($i == 10) {
        echo "Noticias agregadas con éxito.";
        mysqli_close($connection);
        break;
      }
      $i++;
    }
  } else {
    echo "URL no válida";
  }


}
?>