<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriasxgradoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materiasxgrados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materiasxgrado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Materiasxgrado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mxg_id',
            'mxg_id_grd',
            'mxg_id_mat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
