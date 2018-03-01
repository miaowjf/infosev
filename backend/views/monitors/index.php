<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\projects;
use common\models\routes;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MonitorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '监控设备管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitors-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('增加监控设备', ['create'], ['class' => 'btn btn-success']) ?>
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
            'JianKongSheShiBianMa',
            //'设备类型代码',
            //'设备位置',
            'GuanLiDanWei',
            'SheBeiZhuangTai',
            //'备注',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
