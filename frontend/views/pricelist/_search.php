<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PricelistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pricelist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, '项目编号') ?>

    <?= $form->field($model, '收费标准序号') ?>

    <?= $form->field($model, '车型划分分类') ?>

    <?= $form->field($model, '车型划分标准说明') ?>

    <?php // echo $form->field($model, '计费单位') ?>

    <?php // echo $form->field($model, '收费标准') ?>

    <?php // echo $form->field($model, '备注') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
