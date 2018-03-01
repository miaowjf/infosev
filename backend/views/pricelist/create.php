<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Pricelist */

$this->title = '新增收费标准';
$this->params['breadcrumbs'][] = ['label' => '收费标准管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pricelist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
