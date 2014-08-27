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
            <section id="reviews">
                <?php include_once( 'php/utils.php' ) ?>
                <?php quote_list() ?>
            </section>
        </div>
    </div>
    <?php include( 'php/footer.php' ) ?>
</body>
</html>
