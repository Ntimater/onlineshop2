<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shops */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shops-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TinNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NameShop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateRegist')->widget(\yii\jui\DatePicker::classname(), ['language' => 'en', 'dateFormat' => 'yyyy-MM-dd',]) ?>

    <?= $form->field($model, 'DateRemove')->widget(\yii\jui\DatePicker::classname(), ['language' => 'en', 'dateFormat' => 'yyyy-MM-dd',]) ?>

    <?= $form->field($model, 'StatusShop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OwnerShop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PhoneNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
