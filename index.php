<?php
// constante vers index.php

// je remplace index.php par rien et je récupére le chemin dans la superglobale $_SERVER
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

// séparation des paramètres de l'url
$params = explode('/', $_GET['p']);
// var_dump($params);

// recherche des paramètres et des actions ou redirection vers l'index
if ($params[0] !== "") {
    // ucfirst : Renvoie une chaîne avec le premier caractère en majuscule,
    $controller = ucfirst($params[0]);

    // si l'action existe on l'a récupère sinon on va chercher l'index
    $action = isset($params[1]) ? $params[1] : 'index';

    // récupération du bon controller
    require_once(ROOT . 'app/' . 'controllers/' . $controller . '.php');

    // nouvelle instance du bon controller
    $controller = new $controller();

    // récupération de l'action (méthode de classe)
    // si la méthode existe lance l'action
    if (method_exists($controller, $action)) {
        $controller->$action();
        // sinon affiche le message d'erreur
    }else{
        http_response_code(404);
        echo "La page demandée n'existe pas";
    }
} else {
}
