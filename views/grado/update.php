<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Grado */

$this->title = 'Update Grado: ' . $model->grd_id;
$this->params['breadcrumbs'][] = ['label' => 'Grados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->grd_id, 'url' => ['view', 'grd_id' => $model->grd_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
