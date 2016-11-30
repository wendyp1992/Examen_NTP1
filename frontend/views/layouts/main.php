<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'EXAMEN',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Inicio', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Registrarse', 'url' => ['/user/registration/register']];
                $menuItems[] = ['label' => 'Entrar', 'url' => ['/user/security/login']];
            } else {
                $menuItems[] = [
                    'label' => Yii::$app->user->identity->username,
                    'items' => [
                        [
                            'label' => 'Escritorio',
                            'url' => ['/../../backend/web'],
                            'visible' => Yii::$app->user->can('admin'),
                        ],
                        [
                            'label' => 'Cobranzas',
                            'url' => ['/persona/'],
                            'visible' => Yii::$app->user->can('admin'),
                        ],
                        [
                            'label' => 'Pedido',
                            'url' => ['/registro/create'],
                        ],
                        [
                            'label' => 'Salir',
                            'url' => ['/user/security/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ],
                    ],
                ];

                $menuItems[] = '<li>'
                        . Html::endForm()
                        . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
