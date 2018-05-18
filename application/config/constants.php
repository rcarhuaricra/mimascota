<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  |--------------------------------------------------------------------------
  | Display Debug backtrace
  |--------------------------------------------------------------------------
  |
  | If set to TRUE, a backtrace will be displayed along with php errors. If
  | error_reporting is disabled, the backtrace will not display, regardless
  | of this setting
  |
 */
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
  |--------------------------------------------------------------------------
  | File and Directory Modes
  |--------------------------------------------------------------------------
  |
  | These prefs are used when checking and setting modes when working
  | with the file system.  The defaults are fine on servers with proper
  | security, but you may wish (or even need) to change the values in
  | certain environments (Apache running a separate process for each
  | user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
  | always be used to set the mode correctly.
  |
 */
defined('FILE_READ_MODE') OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE') OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE') OR define('DIR_WRITE_MODE', 0755);

/*
  |--------------------------------------------------------------------------
  | File Stream Modes
  |--------------------------------------------------------------------------
  |
  | These modes are used when working with fopen()/popen()
  |
 */
defined('FOPEN_READ') OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE') OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE') OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE') OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE') OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT') OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT') OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
  |--------------------------------------------------------------------------
  | Exit Status Codes
  |--------------------------------------------------------------------------
  |
  | Used to indicate the conditions under which the script is exit()ing.
  | While there is no universal standard for error codes, there are some
  | broad conventions.  Three such conventions are mentioned below, for
  | those who wish to make use of them.  The CodeIgniter defaults were
  | chosen for the least overlap with these conventions, while still
  | leaving room for others to be defined in future versions and user
  | applications.
  |
  | The three main conventions used for determining exit status codes
  | are as follows:
  |
  |    Standard C/C++ Library (stdlibc):
  |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
  |       (This link also contains other GNU-specific conventions)
  |    BSD sysexits.h:
  |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
  |    Bash scripting:
  |       http://tldp.org/LDP/abs/html/exitcodes.html
  |
 */
defined('EXIT_SUCCESS') OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR') OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG') OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE') OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS') OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT') OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE') OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN') OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX') OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('ADMINISTRADOR', '1');
define('PARQUEADOR', '2');
define('OBSERVADOR', '3');

date_default_timezone_set("America/Lima");

define('AÑO_ACTUAL', strftime('%Y'));
define('DIA_DE_HOY', strftime('%Y-%m-%d'));
define('MES_ACTUAL', strftime('%m'));
define('FECHA_HORA_ACTUAL', strftime('%Y-%m-%d %H:%M:%S'));


//define('HORA_ACTUAL', strftime('%H:%M:%S'));
//DATOS DE EMPRESA
define('ICONO', 'http://ricv.pe/wp-content/uploads/2018/04/user-2-1.jpg');
define('ENTIDAD', 'Nombre de Entidad');
define('NOMBRESISTEMA', '<b>Nombre del </b>Sistemas');






define('MENU', '[{"controller": "inicio/","texto": "Inicio","icono": "fa fa-home","color": "text-green"},
                {"controller": "inicio/menu2","texto": "menu2","icono": "fa fa-circle-o","color": "text-aqua"},
                {"controller": "inicio/menu3","texto": "menu3","icono": "fa fa-circle-o","color": "text-aqua"}]');

function GUID() {
    if (function_exists('com_create_guid') === true) {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function getIP() {


    if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        return $_SERVER["HTTP_CLIENT_IP"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
        return $_SERVER["HTTP_X_FORWARDED"];
    } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
        return $_SERVER["HTTP_FORWARDED"];
    } else {
        return $_SERVER["REMOTE_ADDR"];
    }
}

///ICONOS EN LA CABECERA
$IconosAnimales = array(
    'animal-bat',
    'animal-bear',
    'animal-bear-tracks',
    'animal-bird',
    'animal-bird-alt',
    'animal-bone',
    'animal-bull',
    'animal-camel',
    'animal-camel-alt',
    'animal-camel-head',
    'animal-cat',
    'animal-cat-alt-1',
    'animal-cat-alt-2',
    'animal-cat-alt-3',
    'animal-cat-alt-4',
    'animal-cat-with-dog',
    'animal-cow',
    'animal-cow-head',
    'animal-crab',
    'animal-crocodile',
    'animal-deer-head',
    'animal-dog',
    'animal-dog-alt',
    'animal-dog-barking',
    'animal-dolphin',
    'animal-duck-tracks',
    'animal-eagle-head',
    'animal-eaten-fish',
    'animal-elephant',
    'animal-elephant-alt',
    'animal-elephant-head',
    'animal-elephant-head-alt',
    'animal-elk',
    'animal-fish',
    'animal-fish-alt-1',
    'animal-fish-alt-2',
    'animal-fish-alt-3',
    'animal-fish-alt-4',
    'animal-fox',
    'animal-fox-alt',
    'animal-frog',
    'animal-frog-tracks',
    'animal-froggy',
    'animal-giraffe',
    'animal-giraffe-alt',
    'animal-goat-head',
    'animal-goat-head-alt-1',
    'animal-goat-head-alt-2',
    'animal-gorilla',
    'animal-hen-tracks',
    'animal-horse-head',
    'animal-horse-head-alt-1',
    'animal-horse-head-alt-2',
    'animal-horse-tracks',
    'animal-jellyfish',
    'animal-kangaroo',
    'animal-lemur',
    'animal-lion',
    'animal-lion-alt',
    'animal-lion-head',
    'animal-lion-head-alt',
    'animal-monkey',
    'animal-monkey-alt-1',
    'animal-monkey-alt-2',
    'animal-monkey-alt-3',
    'animal-octopus',
    'animal-octopus-alt',
    'animal-owl',
    'animal-panda',
    'animal-panda-alt',
    'animal-panther',
    'animal-parrot',
    'animal-parrot-lip',
    'animal-paw',
    'animal-pelican',
    'animal-penguin',
    'animal-pig',
    'animal-pig-alt',
    'animal-pigeon',
    'animal-pigeon-alt',
    'animal-pigeons',
    'animal-rabbit-running',
    'animal-rat-alt',
    'animal-rhino',
    'animal-rhino-head',
    'animal-rooster',
    'animal-seahorse',
    'animal-seal',
    'animal-shrimp',
    'animal-snail',
    'animal-snail-alt-1',
    'animal-snail-alt-2',
    'animal-snake',
    'animal-squid',
    'animal-squirrel',
    'animal-tiger',
    'animal-tiger-alt',
    'animal-turtle',
    'animal-whale',
    'animal-woodpecker',
    'animal-zebra'
); //colors array

$c1 = sizeof($IconosAnimales) - 1; //get position of the last element within the colors array
//    -- OR, if you prefer --
//$c1=count($colors)-1;//get position of the last element within the colors array
//pick a color at random from the colors array - 'Mersenne Twister based'
$IconoAnimal = $IconosAnimales[mt_rand(0, $c1)];
///ICONOS EN LA CABECERA
define('ANIMAL', $IconoAnimal);

//FECHA
date_default_timezone_set("America/Lima");
//$HOY=now('');
$HOY = date('Y-m-d H:i:s');
define('HOY', $HOY);

Function fechas($dato) {
    date_default_timezone_set("America/Lima");
    /* $date = date_create($dato);     
      return date_format($date, 'd-F-Y'); */
    $time = strtotime($dato);

    $newformat = date('d-M-Y', $time);

    echo $newformat;
}

function linpiarName($string) {
    $extension = pathinfo($string, PATHINFO_EXTENSION);
    $nombre_base = basename($string, '.' . $extension);
    return hyphenize($nombre_base);
}


function hyphenize($string) {
    $dict = array(
        "I'm"      => "I am",
        "thier"    => "their",
        // Add your own replacements here
    );
    return strtolower(
        preg_replace(
          array( '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ),
          array( '-', '' ),
          // the full cleanString() can be downloaded from http://www.unexpectedit.com/php/php-clean-string-of-utf8-chars-convert-to-similar-ascii-char
          cleanString(
              str_replace( // preg_replace can be used to support more complicated replacements
                  array_keys($dict),
                  array_values($dict),
                  urldecode($string)
              )
          )
        )
    );
}

function cleanString($text) {
    $utf8 = array(
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E',
        '/[óòôõºö]/u'   =>   'o',
        '/[ÓÒÔÕÖ]/u'    =>   'O',
        '/[úùûü]/u'     =>   'u',
        '/[ÚÙÛÜ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
        '/[“”«»„]/u'    =>   ' ', // Double quote
        '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
    );
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
}
function carpetas() {
    $direct = date('Y/m/');
    return "./recursos/upload/" . $direct;
}
