<?php

namespace app\models;

use yii\db\ActiveRecord;

class Tom_project extends ActiveRecord
{
    public $task_name; // name of task at join with tom_task table
    public $percent_done; // best report score for each task at join of tom_task and tom_report tables
}