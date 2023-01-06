<?php 
require __DIR__ . 'vendor/bin/heroku-php-apache2 public/';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv ->safeload();
require 'funciones.php';
require 'database.php';

// Conectarnos a la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);