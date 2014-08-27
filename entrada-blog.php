<?php include_once('php/utils.php') ?>
<?php if(isset($_GET['post'])){load_blog_post($_GET['post']);}else{load_blog_post();} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title><?php echo ucfirst(strtolower($titulo)).' - ' ?>Charming Spain</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700|Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
</head>
<body>
    <?php include( 'php/wrapper-superior.php' ) ?>
    <div id="wrapper-principal">
        <?php include( 'php/header-menu.php' ); ?>
        <div id="wrapper-cuerpo">
            <section id="blog">
                <article class="entrada-blog entrada-blog-unica">
                    <div class="cabecera-entrada-blog">
                        <div class="fecha-entrada-blog">
                            <span class="dia-fecha-entrada-blog"><?php echo $fechaDia ?></span>
                            <div class="fecha-entrada-blog-derecha">
                                <span class="mes-fecha-entrada-blog"><?php echo $fechaMes ?></span>
                                <span class="anyo-fecha-entrada-blog"><?php echo $fechaAnyo ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="cuerpo-entrada-blog">
                        <?php echo $contenido ?>
                    </div>
                    <div class="pie-entrada-blog">
                        <div class="compartir-redes-sociales">
                            <a href="#" class="compartir-facebook" target="_blank"><img border="0" width="25" height="25" alt="Compartir en facebook" /></a><div class="separador-redes-sociales"></div><span></span>
                            <a href="#" class="compartir-twitter" target="_blank"><img border="0" width="25" height="25" alt="Compartir en twitter" /></a><div class="separador-redes-sociales"></div><span></span>
                        </div>
                    </div>
                    <div class="wrapper-boton-volver">
                        <a class="boton-volver transicion-rapida" href="blog.php">
                            <span class="frontal transicion-media">GO BACK</span>
                            <span aria-hidden="true" class="icon-volver trasera transicion-media"></span>
                        </a>
                    </div>
                </article>
            </section>
        </div>
    </div>
    <?php include( 'php/footer.php' ) ?>
</body>
</html>
