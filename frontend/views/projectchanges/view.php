<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\projectChanges */

$this->title = $model->xiangMuBianHao0->ShouFeiXiangMuMingChen;
$this->params['breadcrumbs'][] = ['label' => '收费项目变更管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-changes-view">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
echo '</br>';
$filesname=explode('/',$model->xiangMuBianHao0->ShouFeiPiFuWenJianMingChen);
foreach($filesname as $fn){
    if($fn)
      echo Html::a($fn, 'files/'.trim($fn),['class'=>'btn btn-primary','target' => '_blank']).'</br>';
}
?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'XiangMuBianHao',
            'FaShengShiJian',
            'BianGengLeiXing',
            'BianGengQian',
            'BianGengHou',
            'BianGengYuanYin',
            'BeiZhu',
        ],
    ]) ?>

</div>
