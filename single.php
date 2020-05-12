<?php include 'class/Database.php'; ?>
<?php include 'class/Articles.php'; ?>

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

        $article = new Article();
        $articles = $article->getArticle($_GET['articleId']);
        $article = $articles->fetch(); 

        ?>

            <h2><?= $article['title'] ?></h2>

            <p><?= $article['content'] ?></p>
            <p><i><?= $article['author'] . ' ' . $article['createdAt']?></i></p>

        <?php $articles->closeCursor(); ?>

        <a href="home.php">Retour à l'accueil</a>

    </div>
</body>
</html>