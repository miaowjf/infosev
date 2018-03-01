<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\sites */

$this->title = '新增收费站';
$this->params['breadcrumbs'][] = ['label' => '收费站管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
