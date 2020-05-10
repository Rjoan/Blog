<?php require 'class/Database.php'; ?>

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

        $foo = new Database();
        echo $foo->getConnection();

        ?>
    </div>
</body>
</html>