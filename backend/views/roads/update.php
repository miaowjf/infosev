<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\roads */

$this->title = '收费路段管理:'.$model->luXianBianMa0->LuXianMingChen;
$this->params['breadcrumbs'][] = ['label' => '收费路段管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->luXianBianMa0->LuXianMingChen, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="roads-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
