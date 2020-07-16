<?php

namespace app\controllers;

use app\models\Tom_project;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TomController extends Controller
{
    public function actionIndex($id = 1)
    {
        // validate $id, on error throw 404
        if (!is_numeric($id) || !Tom_project::findOne($id))
        {
            throw new NotFoundHttpException("Project with id '$id' doesn't exist");
        }
        // get all projects to display in menu
        $projects = Tom_project::find()->all();

        // join all tasks for selected project and scores of those tasks
        $project_task_scores = Tom_project::find()
            ->select([
                'tom_project.name',
                'percent_done' => 'max(tom_report.percent_done)',
                'task_name' => 'tom_task.name'
            ])
            ->leftJoin('tom_task', 'tom_task.project_id = tom_project.id')
            ->leftJoin('tom_report', 'tom_report.task_id = tom_task.id')
            ->where(['tom_project.id' => $id])
            ->groupBy(['tom_task.id', 'tom_project.name']);

        // min score to check if project is done
        $min_score = $project_task_scores->min('percent_done');

        // get all tasks data to display
        $project_tasks = $project_task_scores->all();

        return $this->render('index', [
            'projects' => $projects,
            'tasks' => $project_tasks,
            'min_score' => $min_score
        ]);
    }
}
