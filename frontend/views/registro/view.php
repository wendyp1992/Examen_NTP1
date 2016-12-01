<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\CHtml;

/* @var $this yii\web\View */
/* @var $model app\models\Registro */

$this->title = $model->idR;
?>
<div class="registro-view">

    <br><br>    <br><br>

    <?php
    $prod = \dektrium\user\models\User::find()->where(['id' => $model->uid])->one();
    $precio = \app\models\Producto::find()->where(['idP' => $model->idP])->one();
    $persona = \app\models\Persona::find()->where(['iduser' => $model->uid])->one();
    ?>
    <center><h2 style="color:#111">DESCRIPCIÓN DEL PEDIDO ACTUAL</h2></center>
    <br>
    <table cellspacing="0"  border="3" width="50%"  align="center">
        <thead>
            <tr bgcolor="#00b3ee "  >
                <th><h4  align='center'>Nombre del Cliente</h4></th>
        <th><h4  align='center'>Producto</th>
            <th><h4  align='center'>Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h4  align='center'><?php echo $prod->username; ?></h4></td>
                            <td><h4  align='center'><?php echo$precio->nombreP ?></h4></td>
                            <td><h4  align='center'><?php echo $precio->precio ?></h4></td>
                        </tr>
                    </tbody>
                    </table>

    <center> <b><h3>TOTAL ADEUDADO: </b><?php echo $persona->saldo ?></h3></center>
                  </div>
