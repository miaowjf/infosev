<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\projectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '收费项目管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增收费项目', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'ShouFeiXiangMuBianHao',
            'ShouFeiXiangMuMingChen',
            //'收费项目性质',
            //'收费项目起点名称',
            //'收费项目止点名称',
            //'收费项目技术等级',
            //'收费项目行政等级',
            'GuanLiJingYingDanWeiMingChen',
            //'组织机构代码',
            //'管理经营单位性质编码',
            'PiZhunShouFeiWenHao',
            //'收费批复文件名称',
            //'批准收费起始时间',
            //'批准收费终止时间',
            'JianChengTongCheShiJian',
            //'是否属于政府还贷公路转为的经营性公路',
            //'现行收费标准批准时间',
            //'是否统贷统还项目',
            'ShouFeiLiChengHeJi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
