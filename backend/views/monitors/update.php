<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\monitors */

$this->title = '监控设备管理:'.$model->luXianBianHao0->LuXianMingChen;
$this->params['breadcrumbs'][] = ['label' => 'JianKongSheBeiGuanLi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->luXianBianHao0->LuXianMingChen, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="monitors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
