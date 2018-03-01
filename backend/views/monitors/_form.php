<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\routes;
use common\models\projects;

/* @var $this yii\web\View */
/* @var $model common\models\monitors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monitors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'XiangMuBianHao')->dropDownList(projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column(),['prompt' =>'选择收费项目']) ?>

    <?= $form->field($model, 'LuXianBianHao')->dropDownList(routes::find()->select(['LuXianMingChen','LuXianBianHao'])->indexby('LuXianBianHao')->column(),['prompt' =>'选择路线']) ?>

    <?= $form->field($model, 'WeiZhiZhuangHao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JianKongSheShiBianMa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SheBeiLeiXingDaiMa')->textInput() ?>

    <?= $form->field($model, 'SheBeiWeiZhi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GuanLiDanWei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SheBeiZhuangTai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BeiZhu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
