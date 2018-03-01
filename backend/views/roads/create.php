<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\roads */

$this->title = '新增收费路段';
$this->params['breadcrumbs'][] = ['label' => '收费路段管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roads-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
