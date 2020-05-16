<?php

namespace App\src\DAO;

class CommentDao extends ArticleDao {

    public function getCommentsFromArticle($articleId) {

        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$articleId]);
    }
}