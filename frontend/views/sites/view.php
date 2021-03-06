<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\url;
use kartik\file\FileInput;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model common\models\sites */

$this->title = $model->ShouFeiZhanJianChen;
$this->params['breadcrumbs'][] = ['label' => '收费站管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <!-- <?= Html::a('地图查看', ['map', 'id' => $model->ID], ['class' => 'btn btn-primary','target' => '_blank']) ?>-->
<?php
echo '</br>';
$filesname=explode('/',$model->shouFeiXiangMuBianHao0->ShouFeiPiFuWenJianMingChen);
foreach($filesname as $fn){
    if($fn)
        echo Html::a($fn, 'files/'.trim($fn),['class'=>'btn btn-primary','target' => '_blank']);
}
?>
<?php
Modal::begin([
    'header'=>'图片展示',
    'toggleButton' => [
        'label'=>'显示图片', 'class'=>'btn btn-info'
    ],
]);
$initpre=array();
//foreach(explode(',',substr($model->ZhaoPian,1)) as $initp){
foreach(explode(',',$model->ZhaoPian) as $initp){
    $initpre[]= $initp=Url::to('uploadimages/').$initp;
}

echo FileInput::widget([
    'name' => 'attachment_49[]',
    'options'=>[
        'multiple'=>true,
    ],
    'pluginOptions' => [
        'showCancel'=>false,
        'showClose'=>false,
        'showUpload'=>false,
        'showRemove'=>false,
        'showBrowse'=>false,
        'showCaption'=>false,

        'initialPreview'=>$initpre,
        'initialPreviewAsData'=>true,
        'initialPreviewShowDelete'=>false,
        'overwriteInitial'=>false,
    ]
]);
Modal::end();

?>
    </p>
    <div class="container">
        <div class="row">
                <div class="col-md-4">
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        //'ID',
        'ShouFeiXiangMuBianHao',
        'SuoZaiLuXianBianHao',
        'ShouFeiZhanZhuangHao',
        'ShouFeiZhanBianMa',
        'ShouFeiZhanMingChen',
        'ShouFeiZhanJianChen',
        'SuoZaiLuXianJiShuDengJi',
        'ShouFeiZhanShouFeiXingZhi',
        'ShouFeiZhanLeiXing',
        'ShouFeiZhanWeiZhiLeiXing',
        'ShouFeiFangXiang',
        'RuKouCheDaoShu',
        'ETCRuKouCheDaoShu',
        'ChuKouCheDaoShu',
        'ETCChuKouCheDaoShu',
        'JingDu',
        'WeiDu',
        'BeiZhu',
    ],
]) ?>
</div>
 <div class="col-md-8">
<div class="row">
<?php echo $this->render('mapindex',array('s'=>[$model->WeiDu,$model->JingDu,$model->ShouFeiZhanJianChen]))?>
</div>
</div>
</div>
</div>
</div>
