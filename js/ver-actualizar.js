function ejecutarPeticion() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("post-feed").innerHTML = this.responseText;
      document.getElementById('post-feed').scrollIntoView({ behavior: 'smooth' });
    }
  };
  xhttp.open("GET", "ver_db.php", true);
  xhttp.send();
}

window.onload = function () {

  document.getElementById("boton2").onclick = ejecutarPeticion;
  document.getElementById("todo").onclick = ejecutarPeticion;

}

