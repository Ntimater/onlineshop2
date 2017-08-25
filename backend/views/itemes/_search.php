<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itemes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdItem') ?>

    <?= $form->field($model, 'DateRegist') ?>

    <?= $form->field($model, 'DateExpiration') ?>

    <?= $form->field($model, 'Quantity') ?>

    <?= $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'Image') ?>

    <?php // echo $form->field($model, 'Categories') ?>

    <?php // echo $form->field($model, 'DedicatePers') ?>

    <?php // echo $form->field($model, 'PhoneNumber') ?>

    <?php // echo $form->field($model, 'StatusItem') ?>

    <?php // echo $form->field($model, 'IdFromShop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
