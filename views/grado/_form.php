<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Grado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grd_nombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
