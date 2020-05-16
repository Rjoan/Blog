<?php
include '../src/DAO/Dao.php'; 
include '../src/DAO/ArticleDao.php'; 

use App\src\DAO\ArticleDao;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>

<body>
    <div>
        <h1>Mon blog</h1>
        <p>En construction</p>

        <?php

        $article = new ArticleDao();
        $articles = $article->getArticles();
        while($article = $articles->fetch()) { ?>

        <h2><a href="single.php?articleId=<?= htmlspecialchars($article->id);?>"><?= htmlspecialchars($article->title);?></a></h2>

            <p><?= htmlspecialchars($article->content) ?></p>
            <p><i><?= htmlspecialchars($article->author) . ' ' . htmlspecialchars($article->createdAt)?></i></p>

        <?php } $articles->closeCursor(); ?>

    </div>
</body>
</html>