<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\routes */

$this->title = $model->LuXianMingChen;
$this->params['breadcrumbs'][] = ['label' => '路线管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="routes-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'LuXianBianHao',
            'LuXianMingChen',
        ],
    ]) ?>

</div>
