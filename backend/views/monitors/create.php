<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\monitors */

$this->title = '增加监控设备';
$this->params['breadcrumbs'][] = ['label' => '监控设备管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
