<?php 

function getDataFileArray($file){
    $archivo = fopen($file,'r');
    $contenido = fread($archivo,filesize($file));
    fclose($archivo);
    return json_decode($contenido,true);

    //hola
    
}

/*Funcion de redireccionamiento de paginas*/
function redirect($pURL)
{
    if (strlen($pURL) > 0) {
        if (headers_sent()) {
            echo "<script>document.location.href='" . $pURL . "';</script>\n";
        } else {
            header("Location: " . $pURL);
        }
        exit();
    }
}
?>
