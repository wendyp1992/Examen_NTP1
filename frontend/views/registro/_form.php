<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Registro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registro-form">
    <br>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'nombreu')->textInput(['maxlength' => true, 'readonly' => true, 'value' => Yii::$app->user->identity->username])->label("Empleado") ?>
       <br>
            <?= $form->field($model, 'idP')->radioList(ArrayHelper::map(app\models\Producto::find()->all(), 'idP', 'nombreP'))->label("Producto") ?>
    <?= $form->field($model, 'uid')->textInput(['type' => "hidden", 'maxlength' => true, 'readonly' => true, 'value' => Yii::$app->user->identity->id])->label(" ") ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Comprar' : 'View', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
