<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shops-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdShop') ?>

    <?= $form->field($model, 'TinNumber') ?>

    <?= $form->field($model, 'NameShop') ?>

    <?= $form->field($model, 'DateRegist') ?>

    <?= $form->field($model, 'DateRemove') ?>

    <?php // echo $form->field($model, 'StatusShop') ?>

    <?php // echo $form->field($model, 'OwnerShop') ?>

    <?php // echo $form->field($model, 'PhoneNumber') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
