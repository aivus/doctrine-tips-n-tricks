<?php
define('PROJECT_DIR', __DIR__ . DIRECTORY_SEPARATOR . '..');
require_once PROJECT_DIR . '/vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Require all entities
foreach (glob(PROJECT_DIR . '/src/GeneratedEntities/*.php') as $file) {
    require_once $file;
}

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'doctrine2',
);

$isDevMode = false;
$paths = array(PROJECT_DIR . '/app/config/entities');
$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);