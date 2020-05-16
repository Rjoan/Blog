<?php 
include '../src/DAO/Dao.php'; 
include '../src/DAO/ArticleDao.php'; 
include '../src/DAO/CommentDao.php'; 

use App\src\DAO\ArticleDao;
use App\src\DAO\CommentDao;
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
        $articles = $article->getArticle($_GET['articleId']);
        $article = $articles->fetch(); 

        ?>

            <h2><?=htmlspecialchars($article->title) ?></h2>

            <p><?= htmlspecialchars($article->content) ?></p>
            <p><i><?= htmlspecialchars($article->author) . ' ' . htmlspecialchars($article->createdAt)?></i></p>

        <?php $articles->closeCursor(); ?>

        <a href="home.php">Retour à l'accueil</a>

        <div style="margin-left: 50px">
            <h3>Commentaires</h3>

            <?php 

            $comment = new CommentDao();
            $comments = $comment->getCommentsFromArticle($_GET['articleId']);
            while($comment = $comments->fetch()) { ?>

                <h4><?=htmlspecialchars($comment->pseudo) ?></h4>

                <p><i><?= htmlspecialchars($comment->content);?></i></p>
                <p><i>Posté le <?= htmlspecialchars($comment->createdAt);?></i></p>

            <?php } $comments->closeCursor(); ?>
        </div>

    </div>
</body>
</html>