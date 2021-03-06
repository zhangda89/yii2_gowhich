<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
?>

<header class="page-header">
    <h3>
        Categories
    </h3>

    <!-- <p>Category描述</p> -->

</header>

<?php if (isset($models) && count($models)): ?>
<div id="categories" class="widget widget_categories">
	<ul>
	    <?php foreach ($models as $v): ?>
		<li class="cat-item cat-item-<?=$v->id;?>" style='display: inline-block;margin: 5px'>
			<span class=" ">
				<a title='<?=Html::encode($v->name);?>' href="<?=Url::toRoute(['category/view', 'category' => Html::encode(urlencode($v->name))]);?>" ><?=$v->name;?></a>
			</span>
		</li>
	    <?php endforeach;?>
	</ul>
</div>
<?php endif;?>
