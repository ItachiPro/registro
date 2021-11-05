<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Materiasxgrado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materiasxgrado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mxg_id_grd')->textInput() ?>

    <?= $form->field($model, 'mxg_id_mat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
