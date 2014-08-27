<?php require_once( 'php/utils.php' ) ?>
<?php process_travelrequest() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Charming Spain - Go where the locals go</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700|Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
</head>
<body>
    <?php include( 'php/wrapper-superior.php' ) ?>
    <div id="wrapper-principal">
        <?php include( 'php/header-menu.php' ); ?>
        <div id="wrapper-cuerpo">
            <section id="travel-request">
                <article>
                    <p><span class="texto-ancho">Thank you very much! What happens next?</span></p>
                    <ul>
                        <li><span class="bola-lista"></span><p>We will send you back a plan with <span class="texto-ancho">your personalized holidays within 2 to 3 working days</span>.</p></li>
                        <li><span class="bola-lista"></span><p>This temporary plan will include a detailed summary of your holidays and the price.</p></li>
                        <li><span class="bola-lista"></span><p>You can accept this plan or request changes as many times as you require.</p></li>
                        <li><span class="bola-lista"></span><p>Once you are 100% satisfied with the holiday plan, you can proceed to pay our fee.</p></li>
                        <li><span class="bola-lista"></span><p>After the payment <span class="texto-ancho">we will book everything</span> for you and a final plan with all the details (names, addresses) will be sent.</p></li>
                    </ul>
                    <p>The only remaining thing for you to do is to go to Spain and have a great time! If you have any questions, one member of our team will be <span class="texto-ancho">at your disposal from 9am to 9pm seven days per week</span>.</p>
                </article>
            </section>
            <section id="resumen-viaje">
                <h1>Trip details</h1>
                <article>                    
                    <div class="fila-resumen-viaje">
                        <div class="columna-izquierda-resumen-viaje columna-resumen-viaje-primera-vertical">
                            <p class="pregunta-resumen-viaje">What kind of trip do you want?</p>
                            <p class="respuesta-resumen-viaje"><?php echo $kind ?></p>
                        </div><div class="columna-derecha-resumen-viaje columna-resumen-viaje-primera-vertical">
                            <p class="pregunta-resumen-viaje">Date range.</p>
                            <p class="respuesta-resumen-viaje"><?php echo $resultCampos['fechacomienzo'].' - '.$resultCampos['fechafin'] ?></p>
                        </div>
                    </div>
                    <div class="fila-resumen-viaje">
                        <div class="columna-izquierda-resumen-viaje">
                            <p class="pregunta-resumen-viaje">Where do you want to go?</p>
                            <p class="respuesta-resumen-viaje"><?php echo $where ?></p>
                        </div><div class="columna-derecha-resumen-viaje">
                            <p class="pregunta-resumen-viaje">people traveling.</p>
                            <p class="respuesta-resumen-viaje"><?php echo $resultCampos['numeropersonas']; echo ($resultCampos['numeropersonas'] == 1 ? ' person' : ' people') ?>.</p> 
                        </div>
                    </div>
                    <div class="fila-resumen-viaje">
                        <div class="columna-izquierda-resumen-viaje">
                            <p class="pregunta-resumen-viaje">Where do you want to sleep?</p>
                            <p class="respuesta-resumen-viaje"><?php echo $sleep ?></p>
                        </div><div class="columna-derecha-resumen-viaje">
                            <p class="pregunta-resumen-viaje">Contact name.</p>
                            <p class="respuesta-resumen-viaje"><?php echo $resultCampos['nombre'] ?></p> 
                        </div>
                    </div>
                    <div class="fila-resumen-viaje">
                        <div class="columna-izquierda-resumen-viaje">
                            <p class="pregunta-resumen-viaje">How do you want to travel?</p>
                            <p class="respuesta-resumen-viaje"><?php echo $travel ?></p>
                        </div><div class="columna-derecha-resumen-viaje">
                            <p class="pregunta-resumen-viaje">Contact email.</p>
                            <p class="respuesta-resumen-viaje"><?php echo $resultCampos['email'] ?></p> </p>  
                        </div>
                    </div>
                    <div class="fila-resumen-viaje">
                        <div class="columna-izquierda-resumen-viaje">
                            <p class="pregunta-resumen-viaje">About the food...</p>
                            <p class="respuesta-resumen-viaje"><?php echo $food ?></p> 
                        </div><div class="columna-derecha-resumen-viaje">
                            <p class="pregunta-resumen-viaje">Additional information.</p>
                            <p class="respuesta-resumen-viaje"><?php echo $resultCampos['informacion-adicional'] <> '' ? $resultCampos['informacion-adicional'] : 'Everything OK' ?></p>
                        </div>
                    </div>
                </article>
            </section>
            <div class="wrapper-boton-volver">
                <a class="boton-volver transicion-rapida" href="index.php">
                    <span class="frontal transicion-media">GO BACK</span>
                    <span aria-hidden="true" class="icon-volver trasera transicion-media"></span>
                </a>
            </div>
        </div>
    </div>
    <?php include( 'php/footer.php' ) ?>
</body>
</html>
