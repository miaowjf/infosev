<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MonitorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monitors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, '项目编号') ?>

    <?= $form->field($model, '路线编号') ?>

    <?= $form->field($model, '位置桩号') ?>

    <?= $form->field($model, '监控设施编码') ?>

    <?php // echo $form->field($model, '设备类型代码') ?>

    <?php // echo $form->field($model, '设备位置') ?>

    <?php // echo $form->field($model, '管理单位') ?>

    <?php // echo $form->field($model, '设备状态') ?>

    <?php // echo $form->field($model, '备注') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
