<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cobranzas';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-index">
    <br>
    <center> <h1><?= Html::encode($this->title) ?></h1></center>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
        //    'idPersona',
            'iduser',
            'idD',
            'saldo',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
