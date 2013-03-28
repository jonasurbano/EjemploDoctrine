<?

header('Content-type: text/html; charset=utf-8');

date_default_timezone_set("Europe/Madrid");

if (!class_exists("Doctrine\Common\Version", false)) {
    require_once "bootstrap_doctrine.php";
}

require_once 'repositories/PronosticoRepositorio.php';
require_once 'repositories/JornadaRepositorio.php';
require_once 'repositories/PartidoRepositorio.php';
require_once 'repositories/ComentarioRepositorio.php';
require_once 'repositories/JugadorRepositorio.php';
require_once "entities/Partido.php";
require_once "entities/Jornada.php";
require_once "entities/Pronostico.php";
require_once "entities/Jugador.php";
require_once "entities/Comentario.php";


?>