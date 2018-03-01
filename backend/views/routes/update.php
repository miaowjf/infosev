<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\routes */

$this->title = '路线修改:'.$model->LuXianMingChen;
$this->params['breadcrumbs'][] = ['label' => '路线管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->LuXianMingChen, 'url' => ['view', 'id' => $model->LuXianBianHao]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="routes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
