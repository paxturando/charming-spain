<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Charming Spain - Go where the locals go</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700|Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./css/charming-spain-theme/jquery-ui-1.10.3.css">
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
</head>
<body>
    <?php include( 'php/wrapper-superior.php' ); ?>
    <div id="wrapper-principal">
        <?php include( 'php/header-menu.php' ); ?>
        <div id="wrapper-cuerpo">
            <section id="page-404">
                <figure>
                    <img src="./images/404.png" alt="file not found" width="106" height="160"> 
                </figure>
                <div>
                    <article>
                        <h1>File not found<span aria-hidden="true" class="icon-question"></span></h1>
                        <p class="url"><?php echo "http://www.charming.spain.com".$_SERVER['REDIRECT_URL'] ?></p>
                        <p>We could not find the above page on our servers.</p>
                    </article>
                    <div class="wrapper-boton-volver">
                        <a class="boton-volver transicion-rapida" href="index.php">
                            <span class="frontal transicion-media">GO BACK</span>
                            <span aria-hidden="true" class="icon-volver trasera transicion-media"></span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include( 'php/footer.php' ) ?>
</body>
</html>
