<?php

namespace app\controllers;

use app\models\Blog;
use app\models\Type;
use yii\data\Pagination;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $models = Type::find()->where(['category' => 'blog'])
            ->orderBy('create_date', SORT_DESC)
            ->all();

        return $this->render('index', ['models' => $models]);

    }

    public function actionView($category)
    {

        if ($category) {
            $category = urldecode($category);
            $res      = Type::find()->where(["name" => $category])->one();

            if ($res) {
                $query = Blog::find()->where(['type_id' => $res->id, 'is_lock' => 0, 'is_delete' => 0])
                    ->orderBy(['create_date' => SORT_DESC]);

                $pagination = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12]);

                $models = $query->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();

                return $this->render('view', [
                    'category'   => $category,
                    'pagination' => $pagination,
                    'models'     => $models,
                ]);
            } else {
                $this->redirect(Url::to(['category/index']));
            }

        } else {
            $this->redirect(Url::to(['category/index']));
        }

    }

}
