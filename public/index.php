<?php

$urlPath = $_SERVER['REQUEST_URI'];

switch ($urlPath) {
    case "/create":
        require_once __DIR__ . "/new-character.php";
        break;
    case "/success":
        echo "c'est cool!";
        break;
}
