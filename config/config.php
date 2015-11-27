<?php

use FStudio\myConfig as config;

$config = new config();

$config->setPath('C:/xampp/htdocs/portalWeb/');
$config->setUrl('http://localhost/portalWeb/web/');

$config->setDriver('mysql');
$config->setHost('localhost');
$config->setPort(3306);
$config->setDbName('portalweb');
$config->setUser('root');
$config->setPassword('');
$config->setDsn(
        $config->getDriver()
        . ':host=' . $config->getHost()
        . ';port=' . $config->getPort()
        . ';dbname=' . $config->getDbName()
);

$config->setSessionName('FStudio');

$config->setDefaultModule('ejemplo');
$config->setDefaultAction('index');

$config->setPlugins(array(
    'fsEjemplo1Plugin',
    'fsEjemplo2Plugin',
));
