<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\routesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '路线管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="routes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增路线', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

           'LuXianBianHao',
           'LuXianMingChen',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
