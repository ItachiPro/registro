<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alumno */

$this->title = $model->alm_id;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="alumno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'alm_id' => $model->alm_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'alm_id' => $model->alm_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'alm_id',
            'alm_codigo',
            'alm_nombre',
            'alm_edad',
            'alm_sexo',
            'alm_observacion',
            'alm_id_grd',
        ],
    ]) ?>

</div>
