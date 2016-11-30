<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\CHtml;

/* @var $this yii\web\View */
/* @var $model app\models\Registro */

$this->title = $model->idR;
?>
<div class="registro-view">

    <br><br><br><br>
    <center><h1>DATOS REGISTRADOS</h1></center>
    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idR',
            //'uid',
            //'idP',
            'nombreu',
        ],
    ])
    ?>

</div>
