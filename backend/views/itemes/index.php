<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Itemes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itemes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Itemes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdItem',
            'DateRegist',
            'DateExpiration',
            'Quantity',
            'Price',
            // 'Description',
            // 'Image',
            // 'Categories',
            // 'DedicatePers',
            // 'PhoneNumber',
            // 'StatusItem',
            // 'IdFromShop',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
