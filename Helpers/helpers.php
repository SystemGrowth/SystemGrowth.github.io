<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Retorla la url del proyecto
function base_url()
{
    return BASE_URL;
}
//Retorla la url de Assets
function media()
{
    return BASE_URL."/Assets";
}

//Carga la cabecera del panel de administración del proyecto.
function headerAdmin($data="")
{
    // Establece la ruta al archivo que contiene la cabecera del panel de administración
    $view_header = "Views/Template/header_admin.php";

    // Carga el archivo que contiene la cabecera del panel de administración
    require_once ($view_header);
}

//Carga el pie de pagina del panel de administración del proyecto.
function footerAdmin($data="")
{
    $view_footer = "Views/Template/footer_admin.php";
    require_once ($view_footer);        
}

//Carga el archivo que contiene la cabecera de la tienda
function headerTienda($data="")
{
    $view_header = "Views/Template/header_tienda.php";
    require_once ($view_header);
}
//Carga el archivo que contiene el pie de página de la tienda 
function footerTienda($data="")
{
    $view_footer = "Views/Template/footer_tienda.php";
    require_once ($view_footer);   
}

// Muestra información formateada
function dep($data)
{
    // Establece el formato HTML para mostrar la información
    $format  = print_r('<pre>');

    // Agrega la información al formato HTML
    $format .= print_r($data);

    // Cierra el formato HTML
    $format .= print_r('</pre>');

    // Retorna la información formateada
    return $format;
}

//Cargar un archivo modal específico en la vista
function getModal(string $nameModal, $data)
{
    // Establece la ruta al archivo que contiene el modal deseado
    $view_modal = "Views/Template/Modals/{$nameModal}.php";

    // Carga el archivo que contiene el modal deseado
    require_once $view_modal;
}
//Cargar un archivo de vista específico y retornar su contenido como una cadena de texto.
function getFile(string $url, $data)
{
    // Inicia el búfer de salida
    ob_start();

    // Carga el archivo de vista deseado
    require_once("Views/{$url}.php");

    // Obtiene el contenido del búfer de salida y lo limpia
    $file = ob_get_clean();

    // Retorna el contenido del archivo de vista
    return $file;
}

//Elimina exceso de espacios entre palabras
    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
        $string = trim($string); //Elimina espacios en blanco al inicio y al final
        $string = stripslashes($string); // Elimina las \ invertidas
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace("LIKE ´","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        return $string;
    }

    function clear_cadena(string $cadena){
        //Reemplazamos la A y a
        $cadena = str_replace(
        array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
        array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
        $cadena
        );
 
        //Reemplazamos la E y e
        $cadena = str_replace(
        array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
        array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
        $cadena );
 
        //Reemplazamos la I y i
        $cadena = str_replace(
        array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
        array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
        $cadena );
 
        //Reemplazamos la O y o
        $cadena = str_replace(
        array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
        array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
        $cadena );
 
        //Reemplazamos la U y u
        $cadena = str_replace(
        array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
        array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
        $cadena );
 
        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
        array('Ñ', 'ñ', 'Ç', 'ç',',','.',';',':'),
        array('N', 'n', 'C', 'c','','','',''),
        $cadena
        );
        return $cadena;
    }
    /*
    function getPageRout(string $ruta){
        require_once("Libraries/Core/Mysql.php");
        $con = new Mysql();
        $sql = "SELECT * FROM post WHERE ruta = '$ruta' AND status != 0 ";
        $request = $con->select($sql);
        if(!empty($request)){
            $request['portada'] = $request['portada'] != "" ? media()."/images/uploads/".$request['portada'] : "";
        }
        return $request;
    }*/

