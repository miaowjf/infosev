<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\monitors */

$this->title = $model->luXianBianHao0->LuXianMingChen;
$this->params['breadcrumbs'][] = ['label' => '监控设备管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确认删除此记录？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'XiangMuBianHao',
            'LuXianBianHao',
            'WeiZhiZhuangHao',
            'JianKongSheShiBianMa',
            'SheBeiLeiXingDaiMa',
            'SheBeiWeiZhi',
            'GuanLiDanWei',
            'SheBeiZhuangTai',
            'BeiZhu',
        ],
    ]) ?>

</div>
