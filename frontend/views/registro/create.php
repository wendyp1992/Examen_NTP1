<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Registro */

$this->title = 'Registrar Pedido';
//$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registro-create">

    <center><h1><?= Html::encode($this->title) ?></h1></center>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
