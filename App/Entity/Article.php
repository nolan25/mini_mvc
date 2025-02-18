<?php

namespace app\Entity;


class Article extends Entity {

    protected ?int $id = null;
    protected ?string $title = '';
    protected ?string $description = '';

    public function getId():?int {
        return $this->id;
    }
    
    public function setId(?int $id): self {
        $this->id = $id;
        return $this;
    }

   public function getTitle():?string {
    return $this->title;

   }
    public function setTitle(?string $title): self {
        $this->title = $title;
        return $this;
    }

    public function getDescription():?string {
        return $this->description;
    }

    public function setDescription(?string $description): self {
        $this->description = $description;
        return $this;
    }


    public function validateArticle($article){
        $errors = [];
        if(empty($article['nom'])) $errors['nom'] = 'Le nom est requis';
        if(empty($article['description'])) $errors['description'] = 'La description est requise';
        return $errors;
    }

    




}