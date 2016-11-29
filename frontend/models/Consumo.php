<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consumo".
 *
 * @property integer $idProducto
 * @property integer $idUsuario
 * @property integer $cantidad
 * @property integer $idConsumo
 *
 * @property Producto $idProducto0
 * @property User $idUsuario0
 */
class Consumo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consumo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idProducto', 'idUsuario', 'cantidad'], 'required'],
            [['idProducto', 'idUsuario', 'cantidad'], 'integer'],
            [['idProducto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['idProducto' => 'idProducto']],
            [['idUsuario'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUsuario' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProducto' => 'Id Producto',
            'idUsuario' => 'Id Usuario',
            'cantidad' => 'Cantidad',
            'idConsumo' => 'Id Consumo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProducto0()
    {
        return $this->hasOne(Producto::className(), ['idProducto' => 'idProducto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario0()
    {
        return $this->hasOne(User::className(), ['id' => 'idUsuario']);
    }
}
