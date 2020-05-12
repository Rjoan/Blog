<?php

class Article {

    public function getArticles() {

        $db = new Database();
        $connect = $db->getConnection();
        $req = $connect->query('SELECT * FROM article ORDER BY id DESC');
        return $req;
    }

    public function getArticle($articleId) {

        $db = new Database();
        
        $connect = $db->getConnection();
        $req = $connect->prepare('SELECT * FROM article WHERE id = ?');
        $foo = $req->execute([$articleId]);
        return $req;
    }
}