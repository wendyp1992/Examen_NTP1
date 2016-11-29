<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController {

    /**
     * Renders the index view for the module
     * @return string
     */
    public $modelClass = 'app\models\Noticias';

//    function actions() {
//        $actions = parent::actions();
//        unset($actions['delete'], $actions['create']);
//        return $actions;
//    }

//    
//    public function actionIndex()
//    {
//        return $this->render('index');
//    }
}
