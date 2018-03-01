<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\wdetectors */

$this->title = $model->luXianBianHao0->LuXianMingChen;
$this->params['breadcrumbs'][] = ['label' => '气象设备管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wdetectors-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'XiangMuBianHao',
            'LuXianBianHao',
            'WeiZhiZhuangHao',
            'QiXiangJianCeQiBianMa',
            'SuoZaiWeiZhiMiaoShu',
            'TianQiXianXiang',
            'WenDu',
            'ShiDu',
            'Feng',
            'QiYa',
            'JiangShui',
            'NenJianDu',
            'LuMianZhuangTai',
            'DiWen',
            'FuShe',
            'GongDianFangShi',
            'ShuJuChuanShuFangShi',
            'ShuJuCaiJiJianGe',
            'SheZhiWeiZhi',
            'BeiZhu',
        ],
    ]) ?>

</div>
