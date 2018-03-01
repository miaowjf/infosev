<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\projects;
use common\models\routes;

/* @var $this yii\web\View */
/* @var $model common\models\wdetectors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wdetectors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'XiangMuBianHao')->dropDownList(projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column(),['maxlength' => true]) ?>

    <?= $form->field($model, 'LuXianBianHao')->dropDownList(routes::find()->select(['LuXianMingChen','LuXianBianHao'])->indexby('LuXianBianHao')->column(),['maxlength' => true]) ?>

    <?= $form->field($model, 'WeiZhiZhuangHao')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'QiXiangJianCeQiBianMa')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'SuoZaiWeiZhiMiaoShu')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'TianQiXianXiang')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'WenDu')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'ShiDu')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'Feng')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'QiYa')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'JiangShui')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'NenJianDu')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'LuMianZhuangTai')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'DiWen')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'FuShe')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'GongDianFangShi')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'ShuJuChuanShuFangShi')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'ShuJuCaiJiJianGe')->textInput() ?>
   <?= $form->field($model, 'SheZhiWeiZhi')->textInput(['maxlength' => true]) ?>
   <?= $form->field($model, 'BeiZhu')->textInput(['maxlength' => true]) ?> 

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
