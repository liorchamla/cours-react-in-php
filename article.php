<?php

// Pour inclure facilement nos classes et dépendances
require 'vendor/autoload.php';

// Equivalent de la récupération d'un article en base de données
$article = App\Generator::getArticle();

// echo "<pre>";
// var_dump($article);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon site en PHP etc etc.</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'/>
</head>
<body>
    <div class="container">
        <h1><?= $article['title'] ?></h1>
        <p class="h4"><?= $article['introduction'] ?></p>
        <hr>
        <?= $article['content'] ?>

        <div id="react-comments"></div>
    </div>
</body>
</html>
