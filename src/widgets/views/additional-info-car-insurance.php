<?php

/** @var $type string */

use app\models\ContactForm;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput; ?>

<div class="additional-info-block car-insurance">
    <div class="row">
        <div class="col-sm-12">
            <div class="additional-info-title">
                Как купить полис
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <?= Html::img('@web/i/info-icon.png') ?>
                    </div>
                    <div class="tix-tex">
                        <h5 class="card-title">Укажите информацию об автомобиле и водителе</h5>
                        <p class="card-text">Это необходимо для корректного расчета цены.</p>
                    </div>    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <?= Html::img('@web/i/money-icon.png') ?>
                    </div>
                    <div class="tix-tex">
                        <h5 class="card-title">Выберите лучшую цену</h5>
                        <p class="card-text">Оформляйте по стоимости от страховой компании, без надбавок.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <?= Html::img('@web/i/email-icon.png') ?>
                    </div>
                    <div class="tix-tex">
                        <h5 class="card-title">Получите полис по электронной почте</h5>
                        <p class="card-text">Еще он сразу появится в РСА. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="#" class="btn btn-primary dark">Рассчитать цену</a>
    </div>
</div>
