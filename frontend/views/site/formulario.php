<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
?>

<div class="site-Formulario" >
    <h1>FORMULARIO</h1><br>
    <?php $form = ActiveForm::begin(); ?>
    <?php
    // $preguntadas = array(); // declaramos una variable que usaremos de contenedor para las preguntas ya realizadas
    $producto = \app\models\Producto::find()->asArray()->all();
    echo Yii::$app->user->identity->username;
            echo '<br>';
    foreach ($producto as $j):
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        . '<input name="idProducto' . $j['idProducto'] . '" value="' . $j['Descripcion'] . '" type="radio" required> ' . '<br>';
    endforeach;
    echo '<br>';
    ?> 
    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>       
</div>

