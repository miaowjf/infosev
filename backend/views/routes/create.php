<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\routes */

$this->title = '增加路线';
$this->params['breadcrumbs'][] = ['label' => '路线管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->LuXianMingChen;
?>
<div class="routes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
