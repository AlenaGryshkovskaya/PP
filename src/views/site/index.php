<?php

/* @var $this yii\web\View */

use app\widgets\AdditionalInfoWidget;
use yii\bootstrap4\Html;

?>
<div class="container">

    <div class="card-block">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ОСАГО</h5>
                        <p class="card-text">Сравните цены в разных компаниях и выберите выгодное предложение.</p>
                        <?= Html::a('Сравнить', ['site/car-insurance'], ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ипотека</h5>
                        <p class="card-text">Страхование жилья, жизни или комплекс для всех ситуаций.</p>
                        <?= Html::a('Рассчитать', ['site/mortgage'], ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= AdditionalInfoWidget::widget() ?>

</div>
