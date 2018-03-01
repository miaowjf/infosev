<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\sites */

$this->title = $model->ShouFeiZhanJianChen;
$this->params['breadcrumbs'][] = ['label' => '收费站管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-view">

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
            //'ID',
            'ShouFeiXiangMuBianHao',
            'SuoZaiLuXianBianHao',
            'ShouFeiZhanZhuangHao',
            'ShouFeiZhanBianMa',
            'ShouFeiZhanMingChen',
            'ShouFeiZhanJianChen',
            'SuoZaiLuXianJiShuDengJi',
            'ShouFeiZhanShouFeiXingZhi',
            'ShouFeiZhanLeiXing',
            'ShouFeiZhanWeiZhiLeiXing',
            'ShouFeiFangXiang',
            'RuKouCheDaoShu',
            'ETCRuKouCheDaoShu',
            'ChuKouCheDaoShu',
            'ETCChuKouCheDaoShu',
            'JingDu',
            'WeiDu',
            'BeiZhu',
        ],
    ]) ?>

</div>
