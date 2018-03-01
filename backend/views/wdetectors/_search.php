<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\wdetectorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wdetectors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'XiangMuBianHao') ?>
   <?= $form->field($model, 'LuXianBianHao') ?>
   <?= $form->field($model, 'WeiZhiZhuangHao') ?>
   <?= $form->field($model, 'QiXiangJianCeQiBianMa') ?>
   <?php // echo $form->field($model, 'SuoZaiWeiZhiMiaoShu') ?>
   <?php // echo $form->field($model, 'TianQiXianXiang') ?>
   <?php // echo $form->field($model, 'WenDu') ?>
   <?php // echo $form->field($model, 'ShiDu') ?>
   <?php // echo $form->field($model, 'Feng') ?>
   <?php // echo $form->field($model, 'QiYa') ?>
   <?php // echo $form->field($model, 'JiangShui') ?>
   <?php // echo $form->field($model, 'NenJianDu') ?>
   <?php // echo $form->field($model, 'LuMianZhuangTai') ?>
   <?php // echo $form->field($model, 'DiWen') ?>
   <?php // echo $form->field($model, 'FuShe') ?>
   <?php // echo $form->field($model, 'GongDianFangShi') ?>
   <?php // echo $form->field($model, 'ShuJuChuanShuFangShi') ?>
   <?php // echo $form->field($model, 'ShuJuCaiJiJianGe') ?>
   <?php // echo $form->field($model, 'SheZhiWeiZhi') ?>
   <?php // echo $form->field($model, 'BeiZhu') ?> 

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
