<?php

namespace App\Repository;

use App\Entity\Article;

class ArticleRepository extends Repository
{


    //afficher les articles
    public function findAll()
{
    try {
        $stmt = $this->pdo->prepare("SELECT * FROM article");
        $stmt->execute();
        $articles = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return array_map(fn($article) => Article::createAndHydrate($article), $articles);
    } catch (\PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}

public function findOneById($id){

    try {
        $stmt = $this->pdo->prepare("SELECT * FROM article WHERE id = :id");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        $article = $stmt->fetch(\PDO::FETCH_ASSOC);
        return Article::createAndHydrate($article);
        
    } catch (\PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    
    }
}

    


}