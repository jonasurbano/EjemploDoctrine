<?php

use Doctrine\ORM\Tools\Setup;

require_once 'Doctrine/ORM/Tools/Setup.php';

if (getenv('MYSQL_DB_HOST') == FALSE) {
    if (!isset($lib))
        $lib = '';

    $conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'ysdf',
    'user'     => 'user',
    'password' => 'passwd');

    $tmpProxy = null;
} else {
    $lib = __DIR__;

    $conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => getenv('MYSQL_DB_HOST'),
    'dbname'   => getenv('MYSQL_DB_NAME'),
    'user'     => getenv('MYSQL_USERNAME'),
    'password' => getenv('MYSQL_PASSWORD'),);

    $tmpProxy = $lib . '/../tmp';
}

Setup::registerAutoloadDirectory($lib);

$isDevMode = true;


$config = Setup::createAnnotationMetadataConfiguration(
    array(__DIR__."/entities"), $isDevMode, $tmpProxy );

$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

function GetMyEntityManager()
{
    global $entityManager;
    return $entityManager;
}

?>