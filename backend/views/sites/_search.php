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

<?= $form->field($model, 'ShouFeiXiangMuBianHao') ?>
   <?= $form->field($model, 'SuoZaiLuXianBianHao') ?>
   <?= $form->field($model, 'ShouFeiZhanZhuangHao') ?>
   <?= $form->field($model, 'ShouFeiZhanBianMa') ?>
   <?php // echo $form->field($model, 'ShouFeiZhanMingChen') ?>
   <?php // echo $form->field($model, 'ShouFeiZhanJianChen') ?>
   <?php // echo $form->field($model, 'SuoZaiLuXianJiShuDengJi') ?>
   <?php // echo $form->field($model, 'ShouFeiZhanShouFeiXingZhi') ?>
   <?php // echo $form->field($model, 'ShouFeiZhanLeiXing') ?>
   <?php // echo $form->field($model, 'ShouFeiZhanWeiZhiLeiXing') ?>
   <?php // echo $form->field($model, 'ShouFeiFangXiang') ?>
   <?php // echo $form->field($model, 'RuKouCheDaoShu') ?>
   <?php // echo $form->field($model, 'ETCRuKouCheDaoShu') ?>
   <?php // echo $form->field($model, 'ChuKouCheDaoShu') ?>
   <?php // echo $form->field($model, 'ETCChuKouCheDaoShu') ?>
   <?php // echo $form->field($model, 'JingDu') ?>
   <?php // echo $form->field($model, 'WeiDu') ?>
   <?php // echo $form->field($model, 'BeiZhu') ?>
    
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
