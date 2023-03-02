//ECONOMIA
document.getElementById('economia').addEventListener('click', function (e) {
    e.preventDefault();
    let cate = 'conomi';
    let data = new FormData();
    data.append('conomi', cate);
    fetch('cat-econo.php', {
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

//NACIONAL
document.getElementById('nacional').addEventListener('click', function (e) {
    e.preventDefault();
    let cate = 'acional';
    let data = new FormData();
    data.append('acional', cate);
    fetch('cat-nacional.php', {
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

//TECNOLOGIA
document.getElementById('tecnologia').addEventListener('click', function (e) {
    e.preventDefault();
    let cate = 'ecnolog';
    let data = new FormData();
    data.append('ecnolog', cate);
    fetch('cat-tecno.php', {
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

//DEPORTES
document.getElementById('deportes').addEventListener('click', function (e) {
    e.preventDefault();
    let cate = 'eport';
    let data = new FormData();
    data.append('eport', cate);
    fetch('cat-deportes.php', {
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

