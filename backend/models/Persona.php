<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $idPersona
 * @property integer $iduser
 * @property integer $idD
 * @property integer $idP
 * @property string $nombreP
 * @property integer $saldo
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iduser', 'idD', 'idP', 'nombreP'], 'required'],
            [['iduser', 'idD', 'idP', 'saldo'], 'integer'],
            [['nombreP'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPersona' => 'Id Persona',
            'iduser' => 'Iduser',
            'idD' => 'Id D',
            'idP' => 'Id P',
            'nombreP' => 'Nombre P',
            'saldo' => 'Saldo',
        ];
    }
}
