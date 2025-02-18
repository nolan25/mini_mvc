<?php require_once _ROOTPATH_ . '/templates/header.php'; ?>


<h1>Liste des Articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <h2><?= htmlspecialchars($article->getTitle()); ?></h2>
                <h1>ID: <?= htmlspecialchars($article->getId()); ?></h2>
                <a href="index.php?controller=article&action=id&id=<?= $article->getId();?>">Lire plus</a>
            </li>
        <?php endforeach; ?>
    </ul>


<?php require_once _ROOTPATH_ . '/templates/footer.php'; ?>