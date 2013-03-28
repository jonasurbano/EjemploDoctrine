<?php

if (!isset($_GET['jornada']) || !is_numeric($_GET['jornada'])) exit();

require_once 'bootstrap.php';

$em = GetMyEntityManager();

$numJornada = $_GET['jornada'] - 1;
$partidos = $em->getRepository('Partido')->getPartidos($numJornada);
if (!$partidos) exit('No encontramos los partidos. Lo sentimos.');

$repositorioComentarios = $em->getRepository('Comentario');
$repositorioPronostico = $em->getRepository('Pronostico');
$repositorioJugadores = $em->getRepository('Jugador');

$idFacebook = $facebook->getUser();
$jugador = $repositorioJugadores->getJugador($idFacebook);

foreach ($partidos as $partido) {
    if ($jugador) {
        $comentario = $repositorioComentarios->getComentario($partido->getId(),$jugador->getId());
        $resultado = $repositorioPronostico->getResultado($partido->getId(), $jugador->getId());
    
        /* Hacer cosas con $jugador, $comentario y $resultado */
    }
}