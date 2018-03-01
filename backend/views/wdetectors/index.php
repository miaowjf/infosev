<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\routes;
use common\models\projects;

/* @var $this yii\web\View */
/* @var $searchModel common\models\wdetectorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '气象设备管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wdetectors-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('增加气象设备', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            ['attribute'=>'XiangMuBianHao','value'=>'xiangMuBianHao0.ShouFeiXiangMuMingChen','filter'=>projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column()],
            ['attribute'=>'LuXianBianHao','value'=>'luXianBianHao0.LuXianMingChen','filter'=>routes::find()->select(['LuXianMingChen','LuXianBianHao'])->indexby('LuXianBianHao')->column()],
            'WeiZhiZhuangHao',
            'QiXiangJianCeQiBianMa',
            //'所在位置描述',
            //'天气现象',
            //'温度',
            //'湿度',
            //'风',
            //'气压',
            //'降水',
            //'能见度',
            //'路面状态',
            //'地温',
            //'辐射',
            'GongDianFangShi',
            'ShuJuChuanShuFangShi',
            //'数据采集间隔',
            'SheZhiWeiZhi',
            //'备注',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
