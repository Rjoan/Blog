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
        $articles = $article->getArticles();
        while($article = $articles->fetch()) { ?>

        <h2><a href="single.php?articleId=<?= htmlspecialchars($article['id']);?>"><?= htmlspecialchars($article['title']);?></a></h2>

            <p><?= $article['content'] ?></p>
            <p><i><?= $article['author'] . ' ' . $article['createdAt']?></i></p>

        <?php } $articles->closeCursor(); ?>

    </div>
</body>
</html>