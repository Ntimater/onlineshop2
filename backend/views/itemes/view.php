<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Itemes */

$this->title = $model->IdItem;
$this->params['breadcrumbs'][] = ['label' => 'Itemes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itemes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdItem], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdItem], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdItem',
            'DateRegist',
            'DateExpiration',
            'Quantity',
            'Price',
            'Description',
            'Image',
            'Categories',
            'DedicatePers',
            'PhoneNumber',
            'StatusItem',
            'IdFromShop',
        ],
    ]) ?>

</div>
