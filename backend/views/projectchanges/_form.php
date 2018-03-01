<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\projects;

/* @var $this yii\web\View */
/* @var $model common\models\projectChanges */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-changes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'XiangMuBianHao')->dropDownList(projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column(),['prompt' => '选择收费项目']) ?>

    <?= $form->field($model, 'FaShengShiJian')->textInput() ?>

    <?= $form->field($model, 'BianGengLeiXing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BianGengQian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BianGengHou')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BianGengYuanYin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BeiZhu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
