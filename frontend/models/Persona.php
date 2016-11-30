<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $idPersona
 * @property integer $iduser
 * @property integer $idD
 * @property double $saldo
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
            [['iduser', 'idD'], 'required'],
            [['iduser', 'idD'], 'integer'],
            [['saldo'], 'number'],
            [['iduser'], 'unique'],
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
            'saldo' => 'Saldo',
        ];
    }
}
