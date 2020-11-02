<?php
    include("db.php");
?>

<?php
    $dni = $_GET["dni"];
    $vote = $_GET["vote"];
    $db = new MyDB();
    
    if(ctype_digit($dni) == TRUE && strlen($dni) >= 7 && strlen($dni) <= 8){
        $query = $db->querySingle("SELECT DNI FROM users WHERE DNI =".$dni.";",FALSE);
        if($query == NULL){
            $update = $db->query("INSERT INTO postulate".$vote." VALUES (".$dni."); ");
            $user = $db->query("INSERT INTO users VALUES (".$dni.");");
            ?>
            <head><link rel="stylesheet" href="estilos.css"></head>
            <body class="main-alert"><h2 class="description">Tu voto ha sido enviado correctamente!</h2>
                <a href="stats.php">Estadisticas</a>
            </body>
            <?php
        }
    }
    else{
        ?>
        <head><link rel="stylesheet" href="estilos.css"></head>
        <body class="main-alert"><h2 class="description">Lo sentimos, el DNI que ha ingresado ya está registrado o es incorrecto</h2>
            <a href="index.php">Atras</a>
        </body>
        
        <?php	
    }
?>