<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\roadsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roads-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

   <?= $form->field($model, 'ID') ?> 
 
   <?= $form->field($model, 'ShouFeiXiangMuBianHao') ?> 
 
   <?= $form->field($model, 'LuXianBianMa') ?> 
 
   <?= $form->field($model, 'LuXianMingChen') ?> 
 
   <?= $form->field($model, 'QiDianMingChen') ?> 
 
   <?php // echo $form->field($model, 'QiDianZhuangHao') ?> 
 
   <?php // echo $form->field($model, 'ZhiDianMingChen') ?> 
 
   <?php // echo $form->field($model, 'ZhiDianZhuangHao') ?> 
 
   <?php // echo $form->field($model, 'JiShuDengJi') ?> 
 
   <?php // echo $form->field($model, 'CheDaoShu') ?> 
 
   <?php // echo $form->field($model, 'LuDuanZongLiCheng') ?> 
 
   <?php // echo $form->field($model, 'QiaoLiangLiCheng') ?> 
 
   <?php // echo $form->field($model, 'SuiDaoLiCheng') ?> 
 
   <?php // echo $form->field($model, 'BeiZhu') ?> 
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
