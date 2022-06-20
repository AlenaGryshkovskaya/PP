<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\helpers\AppHelper;
use app\widgets\ContactFormWidget;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap&subset=cyrillic">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header <?= $this->context->action->id ?>">
    <div class="header-gradient-center"></div>
    <div class="container">
        <?= Menu::widget([
            'items' => [
                ['label' => 'Главная', 'url' => ['site/index']],
                ['label' => 'ОСАГО', 'url' => ['site/car-insurance']],
                ['label' => 'Ипотека', 'url' => ['site/mortgage']],
            ],
            'activeCssClass' => 'v-active',
            'options' => ['class' => 'nav'],
        ]) ?>
        <div class="header-info">
            <div class="header-title"><?= $this->context->headerTitle ?></div>
            <div class="header-text"><?= $this->context->headerText ?></div>
        </div>
    </div>
</header>
<div class="wrap">
    <?= $content ?>
</div>

<footer class="footer">
    <div class="container">
        <?= ContactFormWidget::widget() ?>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
