<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model common\models\projects */

$this->title = $model->ShouFeiXiangMuMingChen;
$this->params['breadcrumbs'][] = ['label' => '收费项目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->ShouFeiXiangMuMingChen;
?>
<div class="projects-view">

    <h1><?= Html::encode($model->ShouFeiXiangMuMingChen) ?></h1>

    <p>
<?php
$filesname=explode('/',$model->ShouFeiPiFuWenJianMingChen);
foreach($filesname as $fn){
    if($fn)
      echo Html::a($fn, 'files/'.trim($fn),['class'=>'btn btn-primary','target' => '_blank']).'</br>';
}
?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ShouFeiXiangMuBianHao',
            'ShouFeiXiangMuMingChen',
            'ShouFeiXiangMuXingZhi',
            'ShouFeiXiangMuQiDianMingChen',
            'ShouFeiXiangMuZhiDianMingChen',
            'ShouFeiXiangMuJiShuDengJi',
            'ShouFeiXiangMuXingZhengDengJi',
            'GuanLiJingYingDanWeiMingChen',
            'ZuZhiJiGouDaiMa',
            'GuanLiJingYingDanWeiXingZhiBianMa',
            'PiZhunShouFeiWenHao',
            'ShouFeiPiFuWenJianMingChen',
            'PiZhunShouFeiQiShiShiJian',
            'PiZhunShouFeiZhongZhiShiJian',
            'JianChengTongCheShiJian',
            'ShiFuShuYuZhengFuHuaiDaiGongLuZhuanWeiDeJingYingXingGongLu',
            'XianXingShouFeiBiaoZhunPiZhunShiJian',
            'ShiFuTongDaiTongHuaiXiangMu',
            'ShouFeiLiChengHeJi',
        ],
    ]) ?>

</div>

