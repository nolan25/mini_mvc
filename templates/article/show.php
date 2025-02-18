<?php require_once _ROOTPATH_ . '/templates/header.php'; ?>


<h1>Liste </h1>
<h2><?= htmlspecialchars($articles->getTitle()); ?></h2>
<h1>ID: <?= htmlspecialchars($articles->getId()); ?></h1>
<p>ID: <?= htmlspecialchars($articles->getDescription()); ?></p>


<?php require_once _ROOTPATH_ . '/templates/footer.php'; ?>