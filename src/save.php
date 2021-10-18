<?php

// retirer les espaces inutiles
$dnd = array_map('trim', $_POST);

// nettoyer les données
$dnd['name'] = filter_var($dnd['name'], FILTER_SANITIZE_STRING);
$dnd['description'] = filter_var($dnd['description'], FILTER_SANITIZE_STRING);
$dnd['strength'] = filter_var($dnd['strength'], FILTER_SANITIZE_NUMBER_INT);
$dnd['constitution'] = filter_var($dnd['constitution'], FILTER_SANITIZE_NUMBER_INT);
$dnd['dexterity'] = filter_var($dnd['dexterity'], FILTER_SANITIZE_NUMBER_INT);

// vérifier la validité des données
$errors = [];
if (empty($dnd['name'])) {
    $errors[] = "Name is empty";
}
if (mb_strlen($dnd['name']) > 50) {
    $errors[] = "Name is too long (>50)";
}
if ($dnd['strength'] < 0 || $dnd['strength'] > 16) {
    $errors[] = "Strength must be between 0 and 16";
}
if ($dnd['constitution'] < 0 || $dnd['constitution'] > 16) {
    $errors[] = "Constitution must be between 0 and 16";
}
if ($dnd['dexterity'] < 0 || $dnd['dexterity'] > 16) {
    $errors[] = "Dexterity must be between 0 and 16";
}

if (empty($errors)) {
    header("Location: /success");
}
