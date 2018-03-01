<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\roads */

$this->title = $model->shouFeiXiangMuBianHao0->ShouFeiXiangMuMingChen;
$this->params['breadcrumbs'][] = ['label' => '收费路段管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roads-view">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
echo '</br>';
$filesname=explode('/',$model->shouFeiXiangMuBianHao0->ShouFeiPiFuWenJianMingChen);
foreach($filesname as $fn){
    if($fn)
      echo Html::a($fn, 'files/'.trim($fn),['class'=>'btn btn-primary','target' => '_blank']).'</br>';
}
?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'ShouFeiXiangMuBianHao',
            'LuXianBianMa',
            'LuXianMingChen',
            'QiDianMingChen',
            'QiDianZhuangHao',
            'ZhiDianMingChen',
            'ZhiDianZhuangHao',
            'JiShuDengJi',
            'CheDaoShu',
            'LuDuanZongLiCheng',
            'QiaoLiangLiCheng',
            'SuiDaoLiCheng',
            'BeiZhu',
        ],
    ]) ?>

</div>
