<?php
use app\components\ArticleWidget;
use yii\widgets\LinkPager;

$this->title                   = Yii::$app->params['title'] . '-' . Yii::$app->params['name']; //$this->params['name'];
$this->params['breadcrumbs'][] = 'Category';
?>

<header class="page-header">
    <h3>
        Category Archives for <?=$category;?>
    </h3>

    <!-- <p>Category描述</p> -->

</header>

<?=ArticleWidget::widget(['articles' => $models]);?>

<?=LinkPager::widget(['pagination' => $pagination]);?>
