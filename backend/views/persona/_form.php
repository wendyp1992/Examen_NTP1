<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Departamento;
use dektrium\user\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iduser')->dropDownList(ArrayHelper::map(user::find()->all(), 'id', 'username'))->label("Nombre Empleado") ?>
    <?= $form->field($model, 'idD')->dropDownList(ArrayHelper::map(Departamento::find()->all(), 'idD', 'nombreD'))->label("Nombre Departamento") ?>
    <?= $form->field($model, 'saldo')->textInput(['type' => "hidden"])->label(" ") ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
