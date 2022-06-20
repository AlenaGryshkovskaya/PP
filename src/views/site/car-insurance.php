<?php

/* @var $this yii\web\View */

use app\widgets\AdditionalInfoWidget;
use yii\bootstrap4\Html;

?>

<div class="container">

    <div class="card-block">
        <div class="row">
            <div class="col-sm-12">
                <div class="frame-block">
                    Тут будет фрейм
                </div>
            </div>
        </div>
    </div>

</div>

<div class="discount-save-block">
    <div class="container">
        <div class="card-block">
                <div>
                    <h5 class="discount-title">Сохраните скидки</h5>
                    <p class="discount-text">Если скидка пропала, просто напишите нам.</p>
                </div> 
                <div>
                    <?= Html::a('Написать', '#contact', ['class' => 'btn btn-primary']) ?>
                </div>
        </div>
    </div>
</div>

<div class="container">

    <?= AdditionalInfoWidget::widget(['type' => 'car-insurance']) ?>

</div>
