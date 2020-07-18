<?php
use yii\helpers\Html;
use yii\helpers\Url;

// set locale language to Slovenian
Yii::$app->language = 'sl-SI';
?>

<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2">
        <h3><?= Yii::t('tom', 'Menu'); ?></h3>

        <ul>
            <?php foreach ($projects as $project): ?>
                <li>
                    <a href="<?= Html::encode(Url::to(['tom/index', 'id' => $project->id])) ?>">
                        <?= Html::encode($project->name) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-8">
        <h1><?= Html::encode($tasks[0]->name) ?></h1>

        <?php if ($min_score < 100): ?>
            <div class="alert alert-warning" role="alert">
                <?= Yii::t('tom', 'Project is not done yet!') ?>
            </div>
        <?php else: ?>
            <div class="alert alert-success" role="alert">
                <?= Yii::t('tom', 'Project is done!') ?>
            </div>
        <?php endif; ?>

        <h3><?= Yii::t('tom', 'Tasks') ?></h3>

        <ol>
            <?php foreach ($tasks as $task): ?>
                <li class="list-unstyled">
                    <?= Html::encode($task->task_name) ?>:
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated active"
                             role="progressbar" style="width: <?= Html::encode($task->percent_done) ?>%"
                             aria-valuenow="<?= Html::encode($task->percent_done) ?>"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2">
        <h3><?= Yii::t('tom', 'Third column') ?></h3>
    </div>
</div>
