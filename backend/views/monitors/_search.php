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

    <?= $form->field($model, 'XiangMuBianHao') ?>

    <?= $form->field($model, 'LuXianBianHao') ?>

    <?= $form->field($model, 'WeiZhiZhuangHao') ?>

    <?= $form->field($model, 'JianKongSheShiBianMa') ?>

    <?php // echo $form->field($model, 'SheBeiLeiXingDaiMa') ?>

    <?php // echo $form->field($model, 'SheBeiWeiZhi') ?>

    <?php // echo $form->field($model, 'GuanLiDanWei') ?>

    <?php // echo $form->field($model, 'SheBeiZhuangTai') ?>

    <?php // echo $form->field($model, 'BeiZhu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
