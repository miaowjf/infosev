<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\projects;
use common\models\routes;

/* @var $this yii\web\View */
/* @var $searchModel common\models\roadsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '收费路段汇总';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roads-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增收费路段', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            ['attribute'=>'ShouFeiXiangMuBianHao','value'=>'shouFeiXiangMuBianHao0.ShouFeiXiangMuMingChen','filter'=>projects::find()->select(['ShouFeiXiangMuMingChen','ShouFeiXiangMuBianHao'])->indexby('ShouFeiXiangMuBianHao')->column()],
            ['attribute'=>'LuXianBianMa','value'=>'luXianBianMa0.LuXianMingChen','filter'=>routes::find()->select(['LuXianMingChen','LuXianBianHao'])->indexby('LuXianBianHao')->column()],
            'LuXianMingChen',
            //'起点名称',
            //'起点桩号',
            //'止点名称',
            //'止点桩号',
            //'技术等级',
            'CheDaoShu',
            'LuDuanZongLiCheng',
            'QiaoLiangLiCheng',
            'SuiDaoLiCheng',
            //'备注',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
