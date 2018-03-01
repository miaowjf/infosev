<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\projects;

/* @var $this yii\web\View */
/* @var $model common\models\Pricelist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pricelist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'XiangMuBianHao')->dropDownList(projects::find()->select(['ShouFeiXiangMuBianHao','ShouFeiXiangMuMingChen'])->indexby('ShouFeiXiangMuBianHao')->column(),['prompt' => '选择收费项目']) ?>

    <?= $form->field($model, 'ShouFeiBiaoZhunXuHao')->textInput() ?>

    <?= $form->field($model, 'CheXingHuaFenFenLei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CheXingHuaFenBiaoZhunShuoMing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JiFeiDanWei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ShouFeiBiaoZhun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BeiZhu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
