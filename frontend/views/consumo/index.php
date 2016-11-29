<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consumos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Consumo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idProducto',
            'idUsuario',
            'cantidad',
            'idConsumo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
