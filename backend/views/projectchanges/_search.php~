<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProjectChangesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-changes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, '项目编号') ?>

    <?= $form->field($model, '发生时间') ?>

    <?= $form->field($model, '变更类型') ?>

    <?= $form->field($model, '变更前') ?>

    <?php // echo $form->field($model, '变更后') ?>

    <?php // echo $form->field($model, '变更原因') ?>

    <?php // echo $form->field($model, '备注') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
