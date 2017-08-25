<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Itemes */

$this->title = 'Create Itemes';
$this->params['breadcrumbs'][] = ['label' => 'Itemes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itemes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'shops' => $shops,

    ]) ?>

</div>
