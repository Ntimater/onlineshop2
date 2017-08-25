<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Itemes */

$this->title = 'Update Itemes: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Itemes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdItem, 'url' => ['view', 'id' => $model->IdItem]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itemes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'shops' => $shops,
    ]) ?>

</div>
