<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\sitesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sites-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, '收费项目编号') ?>

    <?= $form->field($model, '所在路线编号') ?>

    <?= $form->field($model, '收费站桩号') ?>

    <?= $form->field($model, '收费站编码') ?>

    <?php // echo $form->field($model, '收费站名称') ?>

    <?php // echo $form->field($model, '收费站简称') ?>

    <?php // echo $form->field($model, '所在路线技术等级') ?>

    <?php // echo $form->field($model, '收费站收费性质') ?>

    <?php // echo $form->field($model, '收费站类型') ?>

    <?php // echo $form->field($model, '收费站位置类型') ?>

    <?php // echo $form->field($model, '收费方向') ?>

    <?php // echo $form->field($model, '入口车道数') ?>

    <?php // echo $form->field($model, 'ETC入口车道数') ?>

    <?php // echo $form->field($model, '出口车道数') ?>

    <?php // echo $form->field($model, 'ETC出口车道数') ?>

    <?php // echo $form->field($model, '经度') ?>

    <?php // echo $form->field($model, '纬度') ?>

    <?php // echo $form->field($model, '备注') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
