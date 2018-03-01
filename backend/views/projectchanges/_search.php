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

    <?= $form->field($model, 'XiangMuBianHao') ?>

    <?= $form->field($model, 'FaShengShiJian') ?>

    <?= $form->field($model, 'BianGengLeiXing') ?>

    <?= $form->field($model, 'BianGengQian') ?>

    <?php // echo $form->field($model, 'BianGengHou') ?>

    <?php // echo $form->field($model, 'BianGengYuanYin') ?>

    <?php // echo $form->field($model, 'BeiZhu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
