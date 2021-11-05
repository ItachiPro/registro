<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materiasxgrado */

$this->title = 'Create Materiasxgrado';
$this->params['breadcrumbs'][] = ['label' => 'Materiasxgrados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materiasxgrado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
