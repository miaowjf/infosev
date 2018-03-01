<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\projects */

$this->title = '收费项目管理:'.$model->ShouFeiXiangMuMingChen;
$this->params['breadcrumbs'][] = ['label' => '收费项目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ShouFeiXiangMuMingChen, 'url' => ['view', 'id' => $model->ShouFeiXiangMuBianHao]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="projects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
