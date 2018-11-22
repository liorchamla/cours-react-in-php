<?php

namespace App;

use Faker\Factory;

/**
 * Classe de génération aléatoire de données (articles, commentaires ...)
 */
class Generator
{
    /**
     * Permet de générer un article
     *
     * @return array
     */
    public static function getArticle(): array
    {
        // Instanciation de Faker
        $faker = Factory::create();

        // Tableau de commentaires
        $comments = [];

        // Création des commentaires
        for ($i = 0; $i < mt_rand(0, 8); $i++) {
            $comments[] = [
                'author' => $faker->userName,
                'content' => $faker->paragraph,
                'createdAt' => $faker->dateTimeBetween('-6 days')->format('Y-m-d'),
            ];
        }

        // Génération d'un article et agrégation des commentaires
        return [
            'title' => $faker->sentence,
            'introduction' => $faker->paragraph,
            'content' => '<p>' . join('</p><p>', $faker->paragraphs) . '</p>',
            'likes' => mt_rand(1, 10),
            'isLiked' => mt_rand(0, 1) === 1,
            'comments' => $comments,
        ];
    }

    /**
     * Permet de générer un tableau d'articles
     *
     * @return array
     */
    public static function getArticles(): array
    {
        // Instanciation de Faker
        $faker = Factory::create();

        $articles = [];

        for ($i = 0; $i < mt_rand(10, 15); $i++) {
            $articles[] = [
                'title' => $faker->sentence,
                'introduction' => $faker->paragraph,
                'likes' => mt_rand(1, 10),
                'isLiked' => mt_rand(0, 1) === 1,
            ];
        }

        return $articles;
    }
}
