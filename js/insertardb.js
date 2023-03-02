document.getElementById('formulario').addEventListener('submit', function (e) {
    e.preventDefault();
    let feedurl = document.getElementById('feedurl').value;
    let data = new FormData();
    data.append('feedurl', feedurl);
    fetch('insertardb.php', {
        method: 'POST',
        body: data
    })
        .then(response => {
            if (response.ok) {
                return response.text();

            } else {
                throw new Error('Error RESPUESTA DEL SERVER');
            }
        })
        .then(data => {
            console.log(data);
            alert(data);
        })
        .catch(error => {
            console.error(error);
        });
});
