<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticlesFixtures extends Fixture {
    public function load(ObjectManager $manager): void {
        for ($i = 1; $i <= 10; $i++) {
            $article = new Article();
            $article->setTitle("Titre de l'article n°$i")
                    ->setContent("<p>Lorem n°$i Lorem Lorem Lorem Lorem Lorem<br/>Lorem Lorem Lorem Lorem Lorem</p><p>Lorem n°$i Lorem Lorem Lorem Lorem Lorem<br/>Lorem Lorem Lorem Lorem Lorem</p>")
                    ->setImage("https://via.placeholder.com/350x150")
                    ->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($article);
        }
        $manager->flush();
    }
}