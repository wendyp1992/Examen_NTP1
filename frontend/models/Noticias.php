<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $contenido
 * @property integer $publicar
 */
class Noticias extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'noticias';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['titulo', 'contenido', 'publicar'], 'required'],
            [['contenido'], 'string'],
            [['publicar'], 'integer'],
            [['titulo'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'contenido' => 'Contenido',
            'publicar' => 'Publicar',
        ];
    }

    public function fields() {
        return [
            'title' => 'titulo',
            'content' => 'contenido',
            'publicar' => function(Noticias $model) {
                return ($model->publicar=='1' ? 'Publicar':'Borrador');
            }
        ];
    }
    }