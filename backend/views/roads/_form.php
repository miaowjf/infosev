<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\projects;
use common\models\routes;

/* @var $this yii\web\View */
/* @var $model common\models\roads */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roads-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ShouFeiXiangMuBianHao')->dropDownList(projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column(),['prompt' => '选择收费项目']) ?>

    <?= $form->field($model, 'LuXianBianMa')->dropDownList(routes::find()->select(['LuXianMingChen','LuXianBianHao'])->indexby('LuXianBianHao')->column(),['prompt' => '选择路线']) ?>

    <?= $form->field($model, 'LuXianMingChen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QiDianMingChen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QiDianZhuangHao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ZhiDianMingChen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ZhiDianZhuangHao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JiShuDengJi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CheDaoShu')->textInput() ?>

    <?= $form->field($model, 'LuDuanZongLiCheng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QiaoLiangLiCheng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SuiDaoLiCheng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BeiZhu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
