<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'alm_id') ?>

    <?= $form->field($model, 'alm_codigo') ?>

    <?= $form->field($model, 'alm_nombre') ?>

    <?= $form->field($model, 'alm_edad') ?>

    <?= $form->field($model, 'alm_sexo') ?>

    <?php // echo $form->field($model, 'alm_observacion') ?>

    <?php // echo $form->field($model, 'alm_id_grd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
