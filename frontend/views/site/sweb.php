<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'SERVICIOS WEB';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron">
        <h2>AGRUPADOS POR PRODUCTO!</h2>
        <a class="btn btn-lg btn-success" href="/servicios/frontend/web/api/default?idP=1">CAFE</a>
        <a class="btn btn-lg btn-success" href="/servicios/frontend/web/api/default?idP=2">TE</a>
        <a class="btn btn-lg btn-success" href="/servicios/frontend/web/api/default?idP=3">AGUA</a>

        <br>    
        <h2>AGRUPADOS POR USUARIO!</h2>
        <a class="btn btn-lg btn-success" href="/servicios/frontend/web/api/default?uid=1">WENDY</a>
        <a class="btn btn-lg btn-success" href="/servicios/frontend/web/api/default?uid=2">PERSONA1</a>
        <a class="btn btn-lg btn-success" href="/servicios/frontend/web/api/default?uid=3">PERSONA2</a>
        <a class="btn btn-lg btn-success" href="/servicios/frontend/web/api/default?uid=4">PERSONA3</a>
    </div>

</div>
