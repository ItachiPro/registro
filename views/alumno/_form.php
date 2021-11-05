<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alm_codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alm_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alm_edad')->textInput() ?>

    <?= $form->field($model, 'alm_sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alm_observacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alm_id_grd')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
