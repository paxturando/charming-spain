<?php require_once( 'php/utils.php' ) ?>
<?php process_index_form() ?>
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
        <?php include( 'php/header-menu.php' ) ?>
        <div id="wrapper-cuerpo">
            <div id="wrapper-layout">
                <img src="./images/viajero.png" />
                <section id="layout-naranja">
                    <div id="contenido-layout-naranja">
                        <?php require_once( 'php/utils.php' ) ?>
                        <?php rand_quote() ?>
                        <div class="wrapper-boton-reviews">
                            <a class="boton-reviews transicion-rapida" href="reviews.php">
                                <span class="frontal transicion-media">CUSTOMER REVIEWS</span>
                                <span aria-hidden="true" class="icon-bubble trasera transicion-media"></span>
                            </a>
                        </div>
                    </div>
                </section><section id="layout-negro">
                    <div id="contenido-layout-negro">
                        <h2 id="texto-1" class="texto-activo"><span class="texto-resaltado">amazing</span><span class="texto-oculto"> routes...</span></h2>
                        <h2 id="texto-2"><span class="texto-resaltado">local</span><span class="texto-oculto"> restaurants...</span></h2>
                        <h2 id="texto-3"><span class="texto-resaltado">great</span><span class="texto-oculto"> hotels...</span></h2>
                        <h1 id="texto-4"><span class="texto-resaltado">Charming Spain</span></h1>
                        <h2 id="texto-5"><span>go where the locals go</span></h2>
                    </div>
                </section>
            </div>
            <section id="about-us">
                <article id="introduccion">
                    <h3>Charming holidays</h3>
                    <p>Travelling is our passion. After many trips abroad, we would say that we have had the most amazing experiences when a local friend told us what to do and where to go. That is why we created Charming Spain; it will be your friend in Spain. Forget about detached travel agencies, or mass tourism. We will plan and book your personalized trip.</p>
                    <p>You will only need five minutes and not even a word of Spanish to get your amazing holidays. Just fill in the form on the right and discover a different Spain, the authentic one.</p>
                </article>
                <article id="video-presentacion">
                    <iframe width="366" height="275" src="//www.youtube-nocookie.com/embed/aEVwmj5O9TM?rel=0" frameborder="0" allowfullscreen></iframe>
                </article>
                <article id="prices">
                    <h3>Charming prices</h3>
                    <p>As every trip is personalized, the price will be different. We love to support local business, so your holidays will be planned using local prices. No one will offer you such an authentic experience cheaper than us.</p>
                </article>
                <article id="groups">
                    <h3>Charming groups</h3>
                    <p>Travelling is great, but is even better with some friends. In Charming Spain we have special prices for groups. <a href="contact.php">Contact us</a> and let the fun start!</p>
                </article>
            </section><section id="formulario-viaje">
                <article id="introduccion-formulario-viaje">
                    <h3>Charming planner</h3>
                    <p>Give us your preferences and we will send you back your fancy holidays. If you do not find the option you need or have any special requests, please use the text box at the end of the document.</p>
                    <p>You can leave any section blank and we will decide the best option to improve your holidays.</p>
                </article>
                <form action="index.php" method="get">
                    <article>
                        <h4>What kind of trip do you want?<span aria-hidden="true" class="icon-tipo"></span></h4>
                        <p>You can choose more than one option.</p>
                        <div class="cuerpo-form-viaje">
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="relax" <?php echo ($resultCampos['relax']=='on'?'checked':'') ?> /><span>relaxing break</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="culinary" <?php echo ($resultCampos['culinary']=='on'?'checked':'') ?> /><span>culinary tour</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="touristic" <?php echo ($resultCampos['touristic']=='on'?'checked':'') ?> /><span>touristic</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="sportadventure" <?php echo ($resultCampos['sportadventure']=='on'?'checked':'') ?> /><span>sport & adventure</span></div>
                            </div>
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="festivals" <?php echo ($resultCampos['festivals']=='on'?'checked':'') ?> /><span>typical festivals</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="historical" <?php echo ($resultCampos['historical']=='on'?'checked':'') ?> /><span>historical tour</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="muslim" <?php echo ($resultCampos['muslim']=='on'?'checked':'') ?> ><span>muslim spain</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="sun-and-tapas" <?php echo ($resultCampos['sun-and-tapas']=='on'?'checked':'') ?> /><span>sun and tapas</span></div>
                            </div>
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="romantic" <?php echo ($resultCampos['romantic']=='on'?'checked':'') ?> /><span>romantic trip</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="wine-tasting" <?php echo ($resultCampos['wine-tasting']=='on'?'checked':'') ?> /><span>wine tasting</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="folk-related" <?php echo ($resultCampos['folk-related']=='on'?'checked':'') ?> /><span>folk related</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="guided" <?php echo ($resultCampos['guided']=='on'?'checked':'') ?> /><span>guided trip</span></div>
                            </div> 
                        </div>
                    </article>
                    <article>
                        <h4>Where do you want to go?<span aria-hidden="true" class="icon-ubicacion"></span></h4>
                        <p>You can choose more than one option.</p>
                        <div class="cuerpo-form-viaje">
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="north-spain" <?php echo ($resultCampos['north-spain']=='on'?'checked':'') ?> /><span>north spain</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="south-spain" <?php echo ($resultCampos['south-spain']=='on'?'checked':'') ?> /><span>south spain</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="east-spain" <?php echo ($resultCampos['east-spain']=='on'?'checked':'') ?> /><span>east spain</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="west-spain" <?php echo ($resultCampos['west-spain']=='on'?'checked':'') ?> /><span>west spain</span></div>

                            </div>
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="central-spain" <?php echo ($resultCampos['central-spain']=='on'?'checked':'') ?> /><span>central spain</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="to-the-beach" <?php echo ($resultCampos['the-beach']=='on'?'checked':'') ?> /><span>to the beach</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="the-mountains" <?php echo ($resultCampos['the-mountains']=='on'?'checked':'') ?> /><span>to the mountains</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="canary-islands" <?php echo ($resultCampos['canary-islands']=='on'?'checked':'') ?> /><span>canary islands</span></div>
                            </div>
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="balearic-islands" <?php echo ($resultCampos['balearic-islands']=='on'?'checked':'') ?> /><span>balearic islands</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="big-city" <?php echo ($resultCampos['big-city']=='on'?'checked':'') ?> /><span>big city</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="small-towns" <?php echo ($resultCampos['small-towns']=='on'?'checked':'') ?> /><span>small towns</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="heritage" <?php echo ($resultCampos['heritage']=='on'?'checked':'') ?> /><span>world heritage sites</span></div>
                            </div> 
                        </div>
                    </article>
                    <article>
                        <h4>Where do you want to sleep?<span aria-hidden="true" class="icon-alojamiento"></span></h4>
                        <p>You can choose more than one option.</p>
                        <div class="cuerpo-form-viaje">
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="standard-hotel" <?php echo ($resultCampos['standard-hotel']=='on'?'checked':'') ?> /><span>standard hotel</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="charming-hotel" <?php echo ($resultCampos['charming-hotel']=='on'?'checked':'') ?> /><span>charming hotel</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="luxury-hotel" <?php echo ($resultCampos['luxury-hotel']=='on'?'checked':'') ?> /><span>luxury hotel</span></div>
                            </div>
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="spa" <?php echo ($resultCampos['spa']=='on'?'checked':'') ?> /><span>golf & spa hotel</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="apartment" <?php echo ($resultCampos['apartment']=='on'?'checked':'') ?> /><span>apartment hotel</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="bed-and-breakfast" <?php echo ($resultCampos['bed-and-breakfast']=='on'?'checked':'') ?> /><span>bed & breakfast</span></div>
                            </div>
                            <div class="form-viaje-columna form-viaje-columna-triple">
                                <div class="parametro-form-viaje"><input type="checkbox" name="hostel" <?php echo ($resultCampos['hostel']=='on'?'checked':'') ?> /><span>hostel</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="guesthouse" <?php echo ($resultCampos['guesthouse']=='on'?'checked':'') ?> /><span>guest house</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="campground" <?php echo ($resultCampos['campground']=='on'?'checked':'') ?> /><span>campground</span></div>
                            </div> 
                        </div>
                    </article>
                    <article>
                        <h4>How do you want to travel?<span aria-hidden="true" class="icon-transport"></span></h4>
                        <p>You can choose more than one option.</p>
                        <div class="cuerpo-form-viaje">
                            <div class="form-viaje-columna form-viaje-columna-doble">
                                <div class="parametro-form-viaje"><input type="checkbox" name="rented" <?php echo ($resultCampos['rented']=='on'?'checked':'') ?> /><span>rented car</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="bike" <?php echo ($resultCampos['bike']=='on'?'checked':'') ?> /><span>rented bike</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="public" <?php echo ($resultCampos['public']=='on'?'checked':'') ?> /><span>public transport</span></div>
                            </div>
                            <div class="form-viaje-columna form-viaje-columna-doble">
                                <div class="parametro-form-viaje"><input type="checkbox" name="private" <?php echo ($resultCampos['private']=='on'?'checked':'') ?> /><span>private driver</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="campervan" <?php echo ($resultCampos['campervan']=='on'?'checked':'') ?> /><span>campervan</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="ownvehicle" <?php echo ($resultCampos['ownvehicle']=='on'?'checked':'') ?> /><span>I have my own vehicle</span></div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <h4>About the food...<span aria-hidden="true" class="icon-comida"></span></h4>
                        <p>You can choose more than one option.</p>
                        <div class="cuerpo-form-viaje">
                            <div class="form-viaje-columna form-viaje-columna-doble">
                                <div class="parametro-form-viaje"><input type="checkbox" name="meat" <?php echo ($resultCampos['meat']=='on'?'checked':'') ?> /><span>I am a meat lover</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="tapas" <?php echo ($resultCampos['tapas']=='on'?'checked':'') ?> /><span>I want lots of tapas</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="vegan" <?php echo ($resultCampos['vegan']=='on'?'checked':'') ?> /><span>I am vegetarian</span></div>
                            </div>
                            <div class="form-viaje-columna form-viaje-columna-doble">
                                <div class="parametro-form-viaje"><input type="checkbox" name="typical" <?php echo ($resultCampos['typical']=='on'?'checked':'') ?> /><span>I like typical cuisine</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="fish" <?php echo ($resultCampos['fish']=='on'?'checked':'') ?> /><span>I love fish/sea food</span></div>
                                <div class="parametro-form-viaje"><input type="checkbox" name="sweet" <?php echo ($resultCampos['sweet']=='on'?'checked':'') ?> /><span>I have a sweet tooth</span></div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <h4>Trip information<span aria-hidden="true" class="icon-suitcase"></span></h4>
                        <p class="error-parametro-wrapper fondo-alerta<?php echo $resultCampos['enviado']&&($resultCampos['errorNombre']||$resultCampos['errorMail'])? '':' bloque-oculto'; ?>">
                            <?php if( $resultCampos['enviado'] && $resultCampos['errorNombre'] ){ echo '<span class="letra-alerta">contact name is not valid.</span>'; } ?>
                            <?php if( $resultCampos['enviado'] && $resultCampos['errorMail'] ){ echo '<span class="letra-alerta">contact email is not valid.</span>'; } ?>
                        </p>
                        <div class="cuerpo-form-viaje">
                            <div class="form-viaje-columna form-viaje-columna-doble">
                                <div class="parametro-form-viaje parametro-form-viaje-text"><span>from</span><input type="text" id="fecha-comienzo" class="fecha-viaje" value="<?php echo( $resultCampos['enviado']? $resultCampos['fechacomienzo']: $defaultFechaComienzo) ?>" name="fechacomienzo" autocomplete="off" maxlength="10" /><span aria-hidden="true" class="icon-calendario icono-calendario"></span></div>
                                <div class="parametro-form-viaje parametro-form-viaje-text"><span>to</span><input type="text" id="fecha-fin" class="fecha-viaje" value="<?php echo( $resultCampos['enviado']? $resultCampos['fechafin']: $defaultFechaFinal) ?>" name="fechafin" autocomplete="off" maxlength="10" /><span aria-hidden="true" class="icon-calendario icono-calendario"></span></div>
                                <div class="parametro-form-viaje parametro-form-viaje-text"><span>people travelling</span><input type="number" value="<?php echo( $resultCampos['enviado']? $resultCampos['numeropersonas']: 2 ) ?>" name="numeropersonas" /></div>
                                <div class="parametro-form-viaje parametro-form-viaje-text"><span>contact name</span><span aria-hidden="true" class="icon-asterisco campo-obligatorio-icono"></span><input type="text" class="parametro-requerido transicion<?php echo $resultCampos['enviado']&&$resultCampos['errorNombre']?' error-parametro':'' ?>" name="nombre" value="<?php echo( $resultCampos['enviado']? $resultCampos['nombre']: '' ) ?>" /></div>
                                <div class="parametro-form-viaje parametro-form-viaje-text"><span>contact email</span><span aria-hidden="true" class="icon-asterisco campo-obligatorio-icono"></span><input type="text" class="parametro-requerido parametro-mail transicion<?php echo $resultCampos['enviado']&&$resultCampos['errorMail']?' error-parametro':'' ?>" name="email" value="<?php echo( $resultCampos['enviado']? $resultCampos['email']: '' ) ?>" /></div>
                            </div>
                            <div class="form-viaje-columna form-viaje-columna-doble form-viaje-columna">
                                <div class="parametro-form-viaje"><span>additional information</span><textarea name="informacion-adicional" id="informacion-adicional"><?php echo( $resultCampos['enviado']? $resultCampos['informacion-adicional']: '' ) ?></textarea></div>
                            </div>
                        </div>
                    </article>
                    <p class="campo-obligatorio"><span aria-hidden="true" class="icon-asterisco campo-obligatorio-icono"></span><span class="campo-obligatorio-texto">required field</span></p>
                    <div class="wrapper-submit-formulario">
                        <a class="submit-formulario transicion-rapida" href="#">
                            <span class="frontal transicion-media">START PACKING!</span>
                            <span aria-hidden="true" class="icon-viaje trasera transicion-media"></span>
                        </a>
                    </div>
                    <noscript>
                        <input type="submit" value="START PACKING!">
                    </noscript>
                </form>
            </section>
        </div>
    </div>
    <?php include( 'php/footer.php' ) ?>
</body>
</html>
