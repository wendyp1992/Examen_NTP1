<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\assets\AppAsset;

$this->title = 'Pedido';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
   <!-- <h1><?= Html::encode($this->title) ?></h1>-->
    <center><h1>Realice su pedido</h1><br></center>
    <?php $form = ActiveForm::begin(); ?>
    <?php
    $producto = \app\models\Producto::find()->asArray()->all();
    foreach ($producto as $j):
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        . '<input name="resultado' . '" value="' . $j['idP'] . '" type="radio" required> ' . $j['nombreP'] . '<br>';
    endforeach;
    echo '<br>';
    ?> 
    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

