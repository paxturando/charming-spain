<?php

function rand_quote(){
    $listaQuotes = explode("\n", file_get_contents("php/quotes_file.txt"));

    $aleat = rand( 0, count($listaQuotes)-1 );
    $quoteSelect = $listaQuotes[$aleat];

    $quoteParts = explode("|", $quoteSelect );
    $title = $quoteParts[0];
    $quote = $quoteParts[1];
    $author = $quoteParts[2];

    $htmlResult = '';
    $htmlResult .= "<p class=\"titulo-cita\">{$title}</p>\n";
    $htmlResult .= "<p class=\"cita\"><span class=\"comillas-abrir\"></span>{$quote}<span class=\"comillas-cerrar\"></span></p>\n";
    $htmlResult .= "<p class=\"autor-cita\">{$author}</p>\n";

    echo $htmlResult;
}

function quote_list(){
    $listaQuotes = explode("\n", file_get_contents("php/quotes_file.txt"));

    $htmlResult = "<div class=\"columna-reviews\">\n";
    for( $i = 0; $i < ceil( count( $listaQuotes ) / 2 ); $i++ ){
        $partesQuote = explode( '|', $listaQuotes[$i] );

        $htmlResult .= "<article>\n";
        $htmlResult .= "<h2>{$partesQuote[0]}<span aria-hidden=\"true\" class=\"icon-bubble-puntos\"></span></h2>\n";
        $htmlResult .= "<p class=\"cita\"><span class=\"comillas-abrir\"></span>{$partesQuote[1]}<span class=\"comillas-cerrar\"></span></p>\n";
        $htmlResult .= "<p class=\"autor-cita\">{$partesQuote[2]}</p>\n";
        $htmlResult .= "</article>\n";
    }
    $htmlResult .= "</div>\n";
    $htmlResult .= "<div class=\"columna-reviews columna-reviews-derecha\">\n";
    for( $i = ceil( count( $listaQuotes ) / 2 ); $i < count( $listaQuotes ); $i++ ){
        $partesQuote = explode( '|', $listaQuotes[$i] );

        $htmlResult .= "<article>\n";
        $htmlResult .= "<h2>{$partesQuote[0]}<span aria-hidden=\"true\" class=\"icon-bubble-puntos\"></span></h2>\n";
        $htmlResult .= "<p class=\"cita\"><span class=\"comillas-abrir\"></span>{$partesQuote[1]}<span class=\"comillas-cerrar\"></span></p>\n";
        $htmlResult .= "<p class=\"autor-cita\">{$partesQuote[2]}</p>\n";
        $htmlResult .= "</article>\n";
    }
    $htmlResult .= "</div>\n";

    echo $htmlResult;
}

function load_blog_post( $fileName = null ){
    $filePath = './blog/'.$fileName.'.blog';

    if( file_exists ( $filePath ) ){
        $partesBlog = explode("|", file_get_contents( $filePath ));

        global $titulo;
        global $fechaDia;
        global $fechaMes;
        global $fechaAnyo;
        global $resumen;
        global $contenido;

        $titulo = $partesBlog[0];
        $resumen = $partesBlog[1];
        $fecha = DateTime::createFromFormat( 'Ymd', $fileName );
        $fechaDia = date_format( $fecha, 'd' );
        $fechaMes = strtoupper( date_format( $fecha, 'M' ));
        $fechaAnyo = date_format( $fecha, 'Y' );
        $imagen = './blog/images/'.$fileName.'.png';
        if( !file_exists ( $imagen )){
            $imagen = str_replace( '.png', '.jpg', $imagen );
        }

        $contenido = '';
        $contenido .= "<h1 class=\"titulo-entrada-blog\"><a href=\"entrada-blog.php?post={$fileName}\" class=\"transicion\">{$titulo}</a></h1>\n";
        $contenido .= "<img src=\"{$imagen}\" alt=\"Image for post {$titulo}\" width=\"240\" height=\"160\" />";
        $contenido .= $partesBlog[2];
    }else{
        header( 'Location: blog.php' );
    }
}

function parse_index_form(){
    global $resultCampos;
    global $defaultFechaComienzo;
    global $defaultFechaFinal;

    $defaultFechaComienzo = date("m/d/Y", strtotime("now"));
    $defaultFechaFinal = date("m/d/Y", strtotime("+7 days"));

    $resultCampos = array( );
    $resultCampos['nombre'] = isset( $_GET['nombre'] )? $_GET['nombre'] : '';
    $resultCampos['email'] = isset( $_GET['email'] )? $_GET['email'] : '';
    $resultCampos['fechacomienzo'] = isset( $_GET['fechacomienzo'] )? $_GET['fechacomienzo'] : '';
    $resultCampos['fechafin'] = isset( $_GET['fechafin'] )? $_GET['fechafin'] : '';
    $resultCampos['numeropersonas'] = isset( $_GET['numeropersonas'] )? $_GET['numeropersonas'] : '';
    $resultCampos['informacion-adicional'] = isset( $_GET['informacion-adicional'] )? $_GET['informacion-adicional'] : '';

    $resultCampos['relax'] = isset( $_GET['relax'] )? $_GET['relax'] : '';
    $resultCampos['culinary'] = isset( $_GET['culinary'] )? $_GET['culinary'] : '';
    $resultCampos['touristic'] = isset( $_GET['touristic'] )? $_GET['touristic'] : '';
    $resultCampos['sportadventure'] = isset( $_GET['sportadventure'] )? $_GET['sportadventure'] : '';
    $resultCampos['festivals'] = isset( $_GET['festivals'] )? $_GET['festivals'] : '';
    $resultCampos['historical'] = isset( $_GET['historical'] )? $_GET['historical'] : '';
    $resultCampos['muslim'] = isset( $_GET['muslim'] )? $_GET['muslim'] : '';
    $resultCampos['sun-and-tapas'] = isset( $_GET['sun-and-tapas'] )? $_GET['sun-and-tapas'] : '';
    $resultCampos['romantic'] = isset( $_GET['romantic'] )? $_GET['romantic'] : '';
    $resultCampos['wine-tasting'] = isset( $_GET['wine-tasting'] )? $_GET['wine-tasting'] : '';
    $resultCampos['folk-related'] = isset( $_GET['folk-related'] )? $_GET['folk-related'] : '';
    $resultCampos['guided'] = isset( $_GET['guided'] )? $_GET['guided'] : '';

    $resultCampos['north-spain'] = isset( $_GET['north-spain'] )? $_GET['north-spain'] : '';
    $resultCampos['south-spain'] = isset( $_GET['south-spain'] )? $_GET['south-spain'] : '';
    $resultCampos['east-spain'] = isset( $_GET['east-spain'] )? $_GET['east-spain'] : '';
    $resultCampos['west-spain'] = isset( $_GET['west-spain'] )? $_GET['west-spain'] : '';
    $resultCampos['central-spain'] = isset( $_GET['central-spain'] )? $_GET['central-spain'] : '';
    $resultCampos['the-beach'] = isset( $_GET['the-beach'] )? $_GET['the-beach'] : '';
    $resultCampos['the-mountains'] = isset( $_GET['the-mountains'] )? $_GET['the-mountains'] : '';
    $resultCampos['canary-islands'] = isset( $_GET['canary-islands'] )? $_GET['canary-islands'] : '';
    $resultCampos['balearic-islands'] = isset( $_GET['balearic-islands'] )? $_GET['balearic-islands'] : '';
    $resultCampos['big-city'] = isset( $_GET['big-city'] )? $_GET['big-city'] : '';
    $resultCampos['small-towns'] = isset( $_GET['small-towns'] )? $_GET['small-towns'] : '';
    $resultCampos['heritage'] = isset( $_GET['heritage'] )? $_GET['heritage'] : '';

    $resultCampos['standard-hotel'] = isset( $_GET['standard-hotel'] )? $_GET['standard-hotel'] : '';
    $resultCampos['charming-hotel'] = isset( $_GET['charming-hotel'] )? $_GET['charming-hotel'] : '';
    $resultCampos['spa'] = isset( $_GET['spa'] )? $_GET['spa'] : '';
    $resultCampos['bed-and-breakfast'] = isset( $_GET['bed-and-breakfast'] )? $_GET['bed-and-breakfast'] : '';
    $resultCampos['apartment'] = isset( $_GET['apartment'] )? $_GET['apartment'] : '';
    $resultCampos['luxury-hotel'] = isset( $_GET['luxury-hotel'] )? $_GET['luxury-hotel'] : '';
    $resultCampos['guesthouse'] = isset( $_GET['guesthouse'] )? $_GET['guesthouse'] : '';
    $resultCampos['hostel'] = isset( $_GET['hostel'] )? $_GET['hostel'] : '';
    $resultCampos['campground'] = isset( $_GET['campground'] )? $_GET['campground'] : '';

    $resultCampos['rented'] = isset( $_GET['rented'] )? $_GET['rented'] : '';
    $resultCampos['bike'] = isset( $_GET['bike'] )? $_GET['bike'] : '';
    $resultCampos['public'] = isset( $_GET['public'] )? $_GET['public'] : '';
    $resultCampos['private'] = isset( $_GET['private'] )? $_GET['private'] : '';
    $resultCampos['campervan'] = isset( $_GET['campervan'] )? $_GET['campervan'] : '';
    $resultCampos['ownvehicle'] = isset( $_GET['ownvehicle'] )? $_GET['ownvehicle'] : '';

    $resultCampos['meat'] = isset( $_GET['meat'] )? $_GET['meat'] : '';
    $resultCampos['tapas'] = isset( $_GET['tapas'] )? $_GET['tapas'] : '';
    $resultCampos['vegan'] = isset( $_GET['vegan'] )? $_GET['vegan'] : '';
    $resultCampos['typical'] = isset( $_GET['typical'] )? $_GET['typical'] : '';
    $resultCampos['fish'] = isset( $_GET['fish'] )? $_GET['fish'] : '';
    $resultCampos['sweet'] = isset( $_GET['sweet'] )? $_GET['sweet'] : '';

    $resultCampos['enviado'] = $_SERVER['QUERY_STRING'] == ''? false : true;    

    $resultCampos['errorNombre'] = $resultCampos['nombre'] == '';
    $resultCampos['errorMail'] = !preg_match( '/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9])+$/', $resultCampos['email'] );

    return $resultCampos;
}

function process_index_form(){
    $resultCampos = parse_index_form();

    if( !$resultCampos['errorNombre'] && !$resultCampos['errorMail'] ){
        require_once( 'mailing.php' );
        send_travel_mail( $resultCampos );
        header( 'Location: travel-request.php?'. $_SERVER['QUERY_STRING'] );
    }
}

function process_travelrequest(){
    $resultCampos = parse_index_form();

    global $kind;
    global $where;
    global $sleep;
    global $travel;
    global $food;

    if( $resultCampos['relax'] ||
        $resultCampos['culinary'] ||
        $resultCampos['touristic'] ||
        $resultCampos['sportadventure'] ||
        $resultCampos['festivals'] ||
        $resultCampos['historical'] ||
        $resultCampos['muslim'] ||
        $resultCampos['sun-and-tapas'] ||
        $resultCampos['romantic'] ||
        $resultCampos['wine-tasting'] ||
        $resultCampos['folk-related'] ||
        $resultCampos['guided'] ){
        $kind = '';
        $kind .= $resultCampos['relax']? 'relaxing break, ': '';
        $kind .= $resultCampos['culinary']? 'culinary tour, ': '';
        $kind .= $resultCampos['touristic']? 'touristic, ': '';
        $kind .= $resultCampos['sportadventure']? 'sport & adventure, ': '';
        $kind .= $resultCampos['festivals']? 'crazy festivals, ': '';
        $kind .= $resultCampos['historical']? 'historical tour, ': '';
        $kind .= $resultCampos['muslim']? 'muslim spain, ': '';
        $kind .= $resultCampos['sun-and-tapas']? 'sun and tapas, ': '';
        $kind .= $resultCampos['romantic']? 'romantic trip, ': '';
        $kind .= $resultCampos['wine-tasting']? 'wine tasting, ': '';
        $kind .= $resultCampos['folk-related']? 'folk related, ': '';
        $kind .= $resultCampos['guided']? 'guided trip, ': '';
        $kind = rtrim($kind, ", ");
        $kind .= '...';
    }else{
        $kind = 'Surprise me!';
    }

    if( $resultCampos['north-spain'] ||
        $resultCampos['south-spain'] ||
        $resultCampos['east-spain'] ||
        $resultCampos['west-spain'] ||
        $resultCampos['central-spain'] ||
        $resultCampos['the-mountains'] ||
        $resultCampos['canary-islands'] ||
        $resultCampos['balearic-islands'] ||
        $resultCampos['the-beach'] ||
        $resultCampos['big-city'] ||
        $resultCampos['small-towns'] ||
        $resultCampos['heritage'] ){
        $where = '';
        $where .= $resultCampos['north-spain']? 'north spain, ':'';
        $where .= $resultCampos['south-spain']? 'south spain, ':'';
        $where .= $resultCampos['east-spain']? 'east spain, ':'';
        $where .= $resultCampos['west-spain']? 'west spain, ':'';
        $where .= $resultCampos['central-spain']? 'central spain, ':'';
        $where .= $resultCampos['the-mountains']? 'to the mountains, ':'';
        $where .= $resultCampos['canary-islands']? 'canary islands, ':'';
        $where .= $resultCampos['balearic-islands']? 'balearic islands, ':'';
        $where .= $resultCampos['the-beach']? 'to the beach, ':'';
        $where .= $resultCampos['big-city']? 'big city, ':'';
        $where .= $resultCampos['small-towns']? 'small towns, ':'';
        $where .= $resultCampos['heritage']? 'world heritage sites, ':'';
        $where = rtrim($where, ", ");
        $where .= '...';
    }else{
        $where = 'Surprise me!';
    }

    if( $resultCampos['standard-hotel'] ||
        $resultCampos['charming-hotel'] ||
        $resultCampos['spa'] ||
        $resultCampos['bed-and-breakfast'] ||
        $resultCampos['apartment'] ||
        $resultCampos['luxury-hotel'] ||
        $resultCampos['guesthouse'] ||
        $resultCampos['hostel'] ||
        $resultCampos['campground'] ){
        $sleep = '';
        $sleep .= $resultCampos['standard-hotel']? 'standard hotel, ':'';
        $sleep .= $resultCampos['charming-hotel']? 'charming hotel, ':'';
        $sleep .= $resultCampos['spa']? 'golf & spa hotel, ':'';
        $sleep .= $resultCampos['bed-and-breakfast']? 'bed & breakfast, ':'';
        $sleep .= $resultCampos['apartment']? 'apartment hotel, ':'';
        $sleep .= $resultCampos['luxury-hotel']? 'luxury hotel, ':'';
        $sleep .= $resultCampos['guesthouse']? 'guesthouse, ':'';
        $sleep .= $resultCampos['hostel']? 'hostel, ':'';
        $sleep .= $resultCampos['campground']? 'campground, ':'';
        $sleep = rtrim($sleep, ", ");
        $sleep .= '...';
    }else{
        $sleep = 'Surprise me!';
    }

    if( $resultCampos['rented'] ||
        $resultCampos['bike'] ||
        $resultCampos['public'] ||
        $resultCampos['private'] ||
        $resultCampos['ownvehicle'] ||
        $resultCampos['campervan'] ){
        $travel = '';
        $travel .= $resultCampos['rented']? 'rented car, ': '';
        $travel .= $resultCampos['bike']? 'rented bike, ': '';
        $travel .= $resultCampos['public']? 'public transport, ': '';
        $travel .= $resultCampos['private']? 'private driver, ': '';
        $travel .= $resultCampos['ownvehicle']? 'I have my own vehicle, ': '';
        $travel .= $resultCampos['campervan']? 'campervan, ': '';
        $travel = rtrim($travel, ", ");
        $travel .= '...';
    }else{
        $travel = 'Surprise me!';
    }

    if( $resultCampos['vegan'] ||
        $resultCampos['meat'] ||
        $resultCampos['tapas'] ||
        $resultCampos['typical'] ||
        $resultCampos['fish'] ||
        $resultCampos['sweet'] ){
        $food = '';
        $food .= $resultCampos['vegan']? 'I am vegetarian, ': '';
        $food .= $resultCampos['meat']? 'I am a meat lover, ': '';
        $food .= $resultCampos['tapas']? 'I want lots of tapas, ': '';
        $food .= $resultCampos['typical']? 'I like typical cuisine, ': '';
        $food .= $resultCampos['fish']? 'I love fish/sea food, ': '';
        $food .= $resultCampos['sweet']? 'I have a sweet tooth, ': '';
        $food = rtrim($food, ", ");
        $food .= '...';
    }else{
        $food = 'Surprise me!';
    }
}

function parse_contact_form(){
    global $resultCampos;
    $resultCampos = array( );
    $resultCampos['nombre'] = isset( $_GET['nombre'] )? $_GET['nombre'] : '';
    $resultCampos['email'] = isset( $_GET['email'] )? $_GET['email'] : '';
    $resultCampos['phone'] = isset( $_GET['phone'] )? $_GET['phone'] : '';
    $resultCampos['message'] = isset( $_GET['message'] )? $_GET['message'] : '';

    $resultCampos['enviado'] = $_SERVER['QUERY_STRING'] == ''? false : true;
    $resultCampos['errorNombre'] = $resultCampos['nombre'] == '';
    $resultCampos['errorMail'] = !preg_match( '/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9])+$/', $resultCampos['email'] );
    $resultCampos['errorMessage'] = $resultCampos['message'] == '';
    $resultCampos['correctoCampos'] = !( $resultCampos['errorNombre'] || $resultCampos['errorMail'] || $resultCampos['errorMessage'] );

    $resultCampos['correcto'] = $_SERVER['QUERY_STRING'] == ''? true : false;

    return $resultCampos;
}

function process_contact_form(){
    $resultCampos = parse_contact_form();

    if( $resultCampos['correctoCampos'] ){
        require_once( 'mailing.php' );
        $GLOBALS['resultCampos']['correcto'] = send_contact_mail( $resultCampos );
    }
}

function blog_posts( $p=1 ){
    $TAM_PAGINA = 10;
    $pag = $p;

    if( $pag < 1 ){ $pag = 1; }

    $totalBlogs = glob("./blog/*.blog");
    $totalBlogs = array_reverse( $totalBlogs );
    $listaPaginas = array_chunk( $totalBlogs, 10 );

    if( $pag > count( $listaPaginas ) ){
        $pag = count( $listaPaginas );
    }

    $listaPosts = $listaPaginas[$pag -1];

    $primerItem = true;
    foreach( $listaPosts as $post ){
        $fileName = basename( $post, '.blog' );
        $partesPost = explode( "|", file_get_contents( $post ));

        $titulo = $partesPost[0];
        $resumen = $partesPost[1];
        $contenido = $partesPost[2];
        $fecha = DateTime::createFromFormat( 'Ymd', $fileName );
        $fechaDia = date_format( $fecha, 'd' );
        $fechaMes = strtoupper( date_format( $fecha, 'M' ));
        $fechaAnyo = date_format( $fecha, 'Y' );
        $imagen = './blog/images/'.$fileName.'.png';
        if( !file_exists ( $imagen )){
            $imagen = str_replace( '.png', '.jpg', $imagen );
        }


        $contenido = '';
        $contenido .= $primerItem? "<article class=\"entrada-blog primer-elemento-vertical\">": "<article class=\"entrada-blog\">\n";
        $contenido .= "<div class=\"cabecera-entrada-blog\">\n";
        $contenido .= "<div class=\"fecha-entrada-blog\">\n";
        $contenido .= "<span class=\"dia-fecha-entrada-blog\">{$fechaDia}</span>\n";
        $contenido .= "<div class=\"fecha-entrada-blog-derecha\">\n";
        $contenido .= "<span class=\"mes-fecha-entrada-blog\">{$fechaMes}</span>\n";
        $contenido .= "<span class=\"anyo-fecha-entrada-blog\">{$fechaAnyo}</span>\n";
        $contenido .= "</div>\n";
        $contenido .= "</div>\n";
        $contenido .= "</div>\n";
        $contenido .= "<div class=\"cuerpo-entrada-blog\">\n";
        $contenido .= "<h2 class=\"titulo-entrada-blog\"><a href=\"entrada-blog.php?post={$fileName}\" class=\"transicion\">{$titulo}</a></h2>\n";
        $contenido .= "<img src=\"{$imagen}\" alt=\"Post thumbnail for {$titulo}\" width=\"240\" height=\"160\" /><p class=\"resumen-entrada-blog\">{$resumen}</p>\n";
        $contenido .= "</div>\n";
        $contenido .= "<div class=\"pie-entrada-blog\">\n";
        $contenido .= "<div class=\"compartir-redes-sociales\">\n";
        $contenido .= "<a href=\"#\" class=\"compartir-facebook\" target=\"_blank\"><img border=\"0\" width=\"25\" height=\"25\" alt=\"Compartir en facebook\" /></a><div class=\"separador-redes-sociales\"></div><span></span>\n";
        $contenido .= "<a href=\"#\" class=\"compartir-twitter\" target=\"_blank\"><img border=\"0\" width=\"25\" height=\"25\" alt=\"Compartir en twitter\" /></a><div class=\"separador-redes-sociales\"></div><span></span>\n";
        $contenido .= "</div>\n";
        $contenido .= "<a href=\"entrada-blog.php?post={$fileName}\" class=\"continua-leyendo\"><span>Continue reading </span><span aria-hidden=\"true\" class=\"icono-continua-leyendo icon-arrow\"></span></a>\n";
        $contenido .= "</div>\n";
        $contenido .= "</article>\n";

        $primerItem = false;

        echo $contenido;
    }
}
?>