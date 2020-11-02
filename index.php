<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votación</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <section class="main">
        <a href="stats.php">Estadisticas</a>
        <h1 class="title">Votación</h1>
        <p class="description">Hecho por: Correa Alejandro, Orzusa Damián, Olguin Marcos, Chavez Agustín, Salas Milton</p>
    </section>
    <section class="postulate">
        <div class="image postulado1"></div>
        <div class="text">
            <h1 class="title">Postulante Nº 1</h1>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sequi nisi, in accusantium, culpa officia, optio incidunt ratione vel quisquam distinctio ea doloremque cupiditate nemo. Officiis distinctio quisquam numquam dolorem.</p>
        </div>
    </section>
    <section class="postulate">
        <div class="image postulado2"></div>
        <div class="text">
            <h1 class="title">Postulante Nº 2</h1>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sequi nisi, in accusantium, culpa officia, optio incidunt ratione vel quisquam distinctio ea doloremque cupiditate nemo. Officiis distinctio quisquam numquam dolorem.</p>
        </div>
    </section>
    <section class="postulate">
        <div class="image postulado3"></div>
        <div class="text">
            <h1 class="title">Postulante Nº 3</h1>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sequi nisi, in accusantium, culpa officia, optio incidunt ratione vel quisquam distinctio ea doloremque cupiditate nemo. Officiis distinctio quisquam numquam dolorem.</p>
        </div>
    </section>
    <section class="postulate">
        <div class="image postulado4"></div>
        <div class="text">
            <h1 class="title">Postulante Nº 4</h1>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sequi nisi, in accusantium, culpa officia, optio incidunt ratione vel quisquam distinctio ea doloremque cupiditate nemo. Officiis distinctio quisquam numquam dolorem.</p>
        </div>
    </section>
    <section class="postulate">
        <div class="image postulado5"></div>
        <div class="text">
            <h1 class="title">Postulante Nº 5</h1>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sequi nisi, in accusantium, culpa officia, optio incidunt ratione vel quisquam distinctio ea doloremque cupiditate nemo. Officiis distinctio quisquam numquam dolorem.</p>
            <br>
            <form action="vote.php" method="get">
                <h2>DNI</h2>
                <input type="text" name="dni">
                <h2>Votación</h2>
				<select name="vote">
                    <option value="1">Postulado Nº 1</option>
                    <option value="2">Postulado Nº 2</option>
                    <option value="3">Postulado Nº 3</option>
                    <option value="4">Postulado Nº 4</option>
                    <option value="5">Postulado Nº 5</option>
                <input type="submit" class="button" value="VOTAR">
            </form>
        </div>
    </section>
</body>
</html>

