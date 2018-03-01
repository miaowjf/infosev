<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\projectChanges */

$this->title = '修改项目变更:'.$model->xiangMuBianHao0->ShouFeiXiangMuMingChen;
$this->params['breadcrumbs'][] = ['label' => '项目变更管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->xiangMuBianHao0->ShouFeiXiangMuMingChen, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="project-changes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
