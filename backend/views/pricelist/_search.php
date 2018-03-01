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

    <?= $form->field($model, 'XiangMuBianHao') ?>

    <?= $form->field($model, 'ShouFeiBiaoZhunXuHao') ?>

    <?= $form->field($model, 'CheXingHuaFenFenLei') ?>

    <?= $form->field($model, 'CheXingHuaFenBiaoZhunShuoMing') ?>

    <?php // echo $form->field($model, 'JiFeiDanWei') ?>

    <?php // echo $form->field($model, 'ShouFeiBiaoZhun') ?>

    <?php // echo $form->field($model, 'BeiZhu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
