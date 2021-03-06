<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\projects;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PricelistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '收费标准管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pricelist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            ['attribute'=>'XiangMuBianHao','value'=>'xiangMuBianHao0.ShouFeiXiangMuMingChen','filter'=>Projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column()],
            //'收费标准序号',
            'CheXingHuaFenFenLei',
            'CheXingHuaFenBiaoZhunShuoMing',
            'JiFeiDanWei',
            'ShouFeiBiaoZhun',
            //'备注',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
        ],
    ]); ?>
</div>
