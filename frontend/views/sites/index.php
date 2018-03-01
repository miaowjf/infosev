<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\routes;
use common\models\projects;

/* @var $this yii\web\View */
/* @var $searchModel common\models\sitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '收费站管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            ['attribute'=>'ShouFeiXiangMuBianHao','value'=>'shouFeiXiangMuBianHao0.ShouFeiXiangMuMingChen','filter'=>projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column()],
            ['attribute'=>'LuXianMingChen','label'=>'路线名称','value'=>'suoZaiLuXianBianHao0.LuXianMingChen'],
            ['attribute'=>'SuoZaiLuXianBianHao','value'=>'suoZaiLuXianBianHao0.LuXianMingChen','filter'=>routes::find()->select(['LuXianMingChen','LuXianBianHao'])->indexby('LuXianBianHao')->column()],
            //'收费站桩号',
            //'收费站编码',
            //'收费站名称',
            'ShouFeiZhanJianChen',
            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
            //'所在路线技术等级',
            //'收费站收费性质',
            'ShouFeiZhanLeiXing',
            'ShouFeiZhanWeiZhiLeiXing',
            //'收费方向',
            'RuKouCheDaoShu',
            'ETCRuKouCheDaoShu',
            'ChuKouCheDaoShu',
            'ETCChuKouCheDaoShu',
            //'经度',
            //'纬度',
            //'备注',

        ],
    ]); ?>
</div>
