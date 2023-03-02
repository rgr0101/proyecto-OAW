document.getElementById('form-buscar').addEventListener('submit', function (e) {
    e.preventDefault();
    let palabra = document.getElementById('palabra').value;
    let data = new FormData();
    data.append('palabra', palabra);
    fetch('buscardb.php', {
        method: 'POST',
        body: data
    })
        .then(response => {
            if (response.ok) {
                return response.text();

            } else {
                throw new Error('Error en la respuesta del servidor');
            }
        })
        .then(data => {
            console.log(data);
            document.getElementById("post-feed").innerHTML = data;
            document.getElementById('post-feed').scrollIntoView({ behavior: 'smooth' });
            //alert(data); 
        })
        .catch(error => {
            console.error(error);
        });
});

