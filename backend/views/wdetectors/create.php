<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\wdetectors */

$this->title = '增加气象设备';
$this->params['breadcrumbs'][] = ['label' => '气象设备管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wdetectors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
