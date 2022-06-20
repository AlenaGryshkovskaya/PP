<?php

/* @var $this yii\web\View */

use app\widgets\AdditionalInfoWidget;

?>
<div class="container">

    <div class="card-block">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ОСАГО</h5>
                        <p class="card-text">Сравните цены в разных компаниях и выберите выгодное предложение.</p>
                        <a href="#" class="btn btn-primary">Сравнить</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ипотека</h5>
                        <p class="card-text">Страхование жилья, жизни или комплекс для всех ситуаций.</p>
                        <a href="#" class="btn btn-primary">Рассчитать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= AdditionalInfoWidget::widget(['type' => 'mortgage']) ?>

</div>
