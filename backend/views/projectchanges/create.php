<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\projectChanges */

$this->title = '增加项目变更';
$this->params['breadcrumbs'][] = ['label' => '项目变更管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-changes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
