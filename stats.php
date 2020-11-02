<?php
    include("db.php");
?>
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
        <a href="index.php">Atras</a>
        <h2 class="title">Estadisticas</h1><br>
        <?php
            $db = new MyDB;
            $vote1 = $db->querySingle("SELECT MAX(rowid) FROM postulate1");
            $vote2 = $db->querySingle("SELECT MAX(rowid) FROM postulate2");
            $vote3 = $db->querySingle("SELECT MAX(rowid) FROM postulate3");
            $vote4 = $db->querySingle("SELECT MAX(rowid) FROM postulate4");
            $vote5 = $db->querySingle("SELECT MAX(rowid) FROM postulate5");
        ?>
        <h2 class="title">Postulado Nº 1</h2><br>
        <h2 class="title" style="color:#fff"><?php print $vote1 ?></h2>
        <h2 class="title">Postulado Nº 2</h2><br>
        <h2 class="title" style="color:#fff"><?php print $vote2 ?></h2>
        <h2 class="title">Postulado Nº 3</h2><br>
        <h2 class="title" style="color:#fff"><?php print $vote3 ?></h2>
        <h2 class="title">Postulado Nº 4</h2><br>
        <h2 class="title" style="color:#fff"><?php print $vote4 ?></h2>
        <h2 class="title">Postulado Nº 5</h2><br>
        <h2 class="title" style="color:#fff"><?php print $vote5 ?></h2><br>
    </section>
</body>
</html>