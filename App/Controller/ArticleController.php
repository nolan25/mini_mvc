<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Entity\Article;


class ArticleController extends Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'list':
                        $this->list();
                        break;
                    case 'id':
                        $this->findById($_GET['id']);
                        break;
                }
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function list(){
        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->findAll();
        
        $this->render('article/list', [
            'articles' => $articles

        ]);
    }

    
    private function findById($id){
        $articleRepository = new ArticleRepository();
        $article = $articleRepository->findOneById($id);
        $this->render('article/show', [
            'articles' => $article

        ]);
    }
    
}