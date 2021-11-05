<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materiasxgrado */

$this->title = 'Update Materiasxgrado: ' . $model->mxg_id;
$this->params['breadcrumbs'][] = ['label' => 'Materiasxgrados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mxg_id, 'url' => ['view', 'mxg_id' => $model->mxg_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="materiasxgrado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
