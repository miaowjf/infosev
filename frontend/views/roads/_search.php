<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\roadsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roads-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, '收费项目编号') ?>

    <?= $form->field($model, '路线编码') ?>

    <?= $form->field($model, '路线名称') ?>

    <?= $form->field($model, '起点名称') ?>

    <?php // echo $form->field($model, '起点桩号') ?>

    <?php // echo $form->field($model, '止点名称') ?>

    <?php // echo $form->field($model, '止点桩号') ?>

    <?php // echo $form->field($model, '技术等级') ?>

    <?php // echo $form->field($model, '车道数') ?>

    <?php // echo $form->field($model, '路段总里程') ?>

    <?php // echo $form->field($model, '桥梁里程') ?>

    <?php // echo $form->field($model, '隧道里程') ?>

    <?php // echo $form->field($model, '备注') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
