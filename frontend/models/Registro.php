<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registro".
 *
 * @property integer $idR
 * @property integer $uid
 * @property integer $idP
 * @property string $nombreu
 */
class Registro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'idP', 'nombreu'], 'required'],
            [['uid', 'idP'], 'integer'],
            [['nombreu'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idR' => 'Id R',
            'uid' => 'Uid',
            'idP' => 'Id P',
            'nombreu' => 'Nombreu',
        ];
    }
}
