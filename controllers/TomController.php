<?php

namespace app\controllers;

use app\models\Tom_project;
use yii\web\Controller;
use yii\data\Pagination;

class TomController extends Controller
{
    public function actionIndex()
    {
        $query = Tom_project::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $projects = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'projects' => $projects,
            'pagination' => $pagination,
        ]);
    }
}
