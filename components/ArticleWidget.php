<?php

namespace app\components;

use yii\base\Widget;

class ArticleWidget extends Widget
{
    public $article;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render('article', ['article' => $this->article]);
    }
}
