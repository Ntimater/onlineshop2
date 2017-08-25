<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Shops;

/* @var $this yii\web\View */
/* @var $model app\models\Itemes */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="itemes-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'DateRegist')->widget(\yii\jui\DatePicker::classname(), ['language' => 'en', 'dateFormat' => 'yyyy-MM-dd',]) ?>

    <?= $form->field($model, 'DateExpiration')->widget(\yii\jui\DatePicker::classname(), ['language' => 'en', 'dateFormat' => 'yyyy-MM-dd',]) ?>
    
    <?= $form->field($model, 'Quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Categories')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DedicatePers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PhoneNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StatusItem')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'IdFromShop')->dropDownList(arrayHelper::map($shops,'IdShop','NameShop'),
    ['prompt'=>'---Select---'] )?>
    
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>






</div>
