<?php require_once( 'php/utils.php' ) ?>
<?php process_contact_form() ?>
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
    <?php include( 'php/wrapper-superior.php' ) ?>
    <div id="wrapper-principal">
        <?php include( 'php/header-menu.php' ); ?>
        <div id="wrapper-cuerpo">
            <section id="datos-contacto">
                <h2>Do you have any questions or special requests?</h2>
                <p>We will be happy to help before, throughout or after your trip. Our customer service team will be at your disposal from 9am to 9pm, seven days per week.</p>
                <article>
                    <h3>Charming Spain</h3>
                    <div class="datos-contacto-izquierda">
                        <h4>UK office<span class="datos-contacto-inglaterra"></span></h4>
                        <span>76A Sunningfields Road</span>
                        <span>NW4 4RL</span>
                        <span>London, (UK)</span>
                        <span class="telefono-datos-contacto">+44 (0) 7946 22 10 44</span>
                    </div><div class="datos-contacto-derecha">
                        <h4>Spanish office<span class="datos-contacto-espanya"></span></h4>
                        <span>C/ Castielfabib 16-8</span>
                        <span>46015</span>
                        <span>Valencia, (Spain)</span>
                        <span class="telefono-datos-contacto">+34 620 73 68 65</span>
                    </div>
                    <a href="mailto:contact@charming-spain.com"><span aria-hidden="true" class="icon-sobre icono-mail-contacto"></span><span class="transicion">contact@charming-spain.com</span></a>
                </article>
            </section><section id="formulario-contacto">
                <form action="contact.php">
                    <article>
                        <h1>Contact form <span aria-hidden="true" class="icon-sobre"></span></h1>
                        <?php if( $resultCampos['enviado'] ): ?>
                        <p class="error-parametro-wrapper<?php echo !$resultCampos['correctoCampos'] || !$resultCampos['correcto']? ' fondo-alerta': '' ?>" style="display: block;">
                            <span<?php echo !$resultCampos['correcto']? ' class="letra-alerta"': '' ?>><?php echo $resultCampos['correcto']? 'your message has been successfully sent.': ($resultCampos['correctoCampos']? 'there was an error trying to send your message.':'') ?></span>
                            <?php if( $resultCampos['enviado'] && $resultCampos['errorNombre'] ){ echo '<span class="letra-alerta">name is not valid.</span>'; } ?>
                            <?php if( $resultCampos['enviado'] && $resultCampos['errorMail'] ){ echo '<span class="letra-alerta">email is not valid.</span>'; } ?>
                            <?php if( $resultCampos['enviado'] && $resultCampos['errorMessage'] ){ echo '<span class="letra-alerta">message is not valid.</span>'; } ?>
                        <?php else: ?>
                        <p class="error-parametro-wrapper bloque-oculto" style="display: block;">
                        <?php endif; ?>
                        </p>
                        <div class="columna-formulario-contacto columna-formulario-contacto-izquierda">                    
                            <div class="parametro-formulario-contacto">
                                <span class="parametro-formulario-contacto-texto">name</span><span aria-hidden="true" class="icon-asterisco campo-obligatorio-icono"></span><input type="text" class="parametro-requerido<?php echo $resultCampos['enviado']&&$resultCampos['errorNombre']?' error-parametro':'' ?>" name="nombre" value="<?php echo ( $resultCampos['enviado'] && !$resultCampos['correcto'] )? $resultCampos['nombre'] :'' ?>" />    
                            </div>
                            <div class="parametro-formulario-contacto">
                                <span class="parametro-formulario-contacto-texto">phone</span><input type="text" name="phone" value="<?php echo ( $resultCampos['enviado'] && !$resultCampos['correcto'] )? $resultCampos['phone'] :'' ?>" />    
                            </div>
                            <div class="parametro-formulario-contacto">
                                <span class="parametro-formulario-contacto-texto">email</span><span aria-hidden="true" class="icon-asterisco campo-obligatorio-icono"></span><input type="text" class="parametro-requerido parametro-mail<?php echo $resultCampos['enviado']&&$resultCampos['errorMail']?' error-parametro':'' ?>" name="email" value="<?php echo ( $resultCampos['enviado'] && !$resultCampos['correcto'] )? $resultCampos['email'] :'' ?>" />    
                            </div>
                        </div><div class="columna-formulario-contacto columna-formulario-contacto-derecha">
                            <div class="parametro-formulario-contacto">
                                <span class="parametro-formulario-contacto-texto">message</span><span aria-hidden="true" class="icon-asterisco campo-obligatorio-icono"></span><textarea class="parametro-requerido<?php echo $resultCampos['enviado']&&$resultCampos['errorMessage']?' error-parametro':'' ?>" name="message" ><?php echo ( $resultCampos['enviado'] && !$resultCampos['correcto'] )? $resultCampos['message'] :'' ?></textarea>
                            </div>
                        </div>
                    </article>
                    <p class="campo-obligatorio">
                        <span aria-hidden="true" class="icon-asterisco campo-obligatorio-icono"></span><span class="campo-obligatorio-texto">required field</span>
                    </p>
                    <div class="wrapper-submit-formulario">
                        <a class="submit-formulario transicion-rapida" href="#">
                            <span class="frontal transicion-media">SEND MESSAGE</span>
                            <span aria-hidden="true" class="icon-sobre trasera transicion-media"></span>
                        </a>
                    </div>
                    <noscript>
                        <input type="submit" value="SEND MESSAGE">
                    </noscript>
                </form>
            </section>
        </div>
    </div>
    <?php include( 'php/footer.php' ) ?>
</body>
</html>
