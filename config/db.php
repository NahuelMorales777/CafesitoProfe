<?php

function conectarDb(): PDO
{
    $dbName = 'mysql:host=localhost; dbname=ejercicio_web';
    $dbUser = 'root';
    $dbPassword = '';

    $db = new PDO($dbName, $dbUser, $dbPassword);

    if (!$db) {
        echo "Error: No se pudo conectar a MySQL.";
    }

    return $db;
}

conectarDb();

