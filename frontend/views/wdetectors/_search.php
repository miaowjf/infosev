<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\wdetectorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wdetectors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, '项目编号') ?>

    <?= $form->field($model, '路线编号') ?>

    <?= $form->field($model, '位置桩号') ?>

    <?= $form->field($model, '气象检测器编码') ?>

    <?php // echo $form->field($model, '所在位置描述') ?>

    <?php // echo $form->field($model, '天气现象') ?>

    <?php // echo $form->field($model, '温度') ?>

    <?php // echo $form->field($model, '湿度') ?>

    <?php // echo $form->field($model, '风') ?>

    <?php // echo $form->field($model, '气压') ?>

    <?php // echo $form->field($model, '降水') ?>

    <?php // echo $form->field($model, '能见度') ?>

    <?php // echo $form->field($model, '路面状态') ?>

    <?php // echo $form->field($model, '地温') ?>

    <?php // echo $form->field($model, '辐射') ?>

    <?php // echo $form->field($model, '供电方式') ?>

    <?php // echo $form->field($model, '数据传输方式') ?>

    <?php // echo $form->field($model, '数据采集间隔') ?>

    <?php // echo $form->field($model, '设置位置') ?>

    <?php // echo $form->field($model, '备注') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
