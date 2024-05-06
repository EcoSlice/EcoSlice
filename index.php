<?php

require_once __DIR__.'/router.php';


get('/', 'pages/ar/home.php');
get('/features', 'pages/ar/features.php');
get('/contact-us', 'pages/ar/contactUS.php');


get('/ar', 'pages/ar/home.php');
get('/ar/features', 'pages/ar/features.php');
get('/ar/contact-us', 'pages/ar/contactUS.php');

get('/en', 'pages/en/home.php');
get('/en/features', 'pages/en/features.php');
get('/en/contact-us', 'pages/en/contactUS.php');

get('/fr', 'pages/fr/home.php');
get('/fr/features', 'pages/fr/features.php');
get('/fr/contact-us', 'pages/fr/contactUS.php');


any('/404','pages/ar/home.php');
