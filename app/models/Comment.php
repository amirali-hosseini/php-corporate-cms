<?php

namespace app\models;

use app\libraries\Model;

class Comment extends Model
{
    protected string $table = 'comments';

    public function join(): false|array
    {
        return $this
            ->query("SELECT `$this->table`.*,articles.title as article_title FROM `$this->table` INNER JOIN `articles` ON `$this->table`.article_id = `articles`.id")
            ->execute()
            ->get();
    }
}