<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\routes;
use common\models\projects;
use yii\Helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\sites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sites-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <!--<?= $form->field($model, 'ID')->textInput() ?>-->

    <?= $form->field($model, 'ShouFeiXiangMuBianHao')->dropDownList(projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column(),['prompt'=>"请选择项目编号"]) ?>

    <?= $form->field($model, 'SuoZaiLuXianBianHao')->dropDownList(routes::find()->select(['LuXianMingChen','LuXianBianHao'])->indexby('LuXianBianHao')->column(),['prompt'=>'请选择所在路线']) ?>

 <?= $form->field($model, 'ShouFeiZhanZhuangHao')->textInput(['maxlength' => true]) ?> 
   <?= $form->field($model, 'ShouFeiZhanBianMa')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'ShouFeiZhanMingChen')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'ShouFeiZhanJianChen')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'SuoZaiLuXianJiShuDengJi')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'ShouFeiZhanShouFeiXingZhi')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'ShouFeiZhanLeiXing')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'ShouFeiZhanWeiZhiLeiXing')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'ShouFeiFangXiang')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'RuKouCheDaoShu')->textInput() ?> 
 
   <?= $form->field($model, 'ETCRuKouCheDaoShu')->textInput() ?> 
 
   <?= $form->field($model, 'ChuKouCheDaoShu')->textInput() ?> 
 
   <?= $form->field($model, 'ETCChuKouCheDaoShu')->textInput() ?> 
 
   <?= $form->field($model, 'JingDu')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'WeiDu')->textInput(['maxlength' => true]) ?> 
 
   <?= $form->field($model, 'BeiZhu')->textInput(['maxlength' => true]) ?> 

<?= $form->field($model, 'imageFile[]')->widget(FileInput::classname(),
    [
        'options'=> ['accept'=>'image/*','multiple' => true,],
        'pluginOptions' => [
            'uploadUrl' => Url::to(['/upload/images']),
            'maxFileCount' => 4,
        ],
    ]
);?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
