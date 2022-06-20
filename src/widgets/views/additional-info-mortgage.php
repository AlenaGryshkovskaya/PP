<?php

/** @var $type string */

use app\models\ContactForm;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput; ?>

<div class="additional-info-block main">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <?= Html::img('@web/i/money-icon.png') ?>
                    <h5 class="card-title">Выгодно</h5>
                    <p class="card-text">Важна цена? Присмотритесь к вариантам дешевле.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <?= Html::img('@web/i/time-icon.png') ?>
                    <h5 class="card-title">Быстро</h5>
                    <p class="card-text">
                        Экономьте время на поездках по офисам страховых компаний в поисках лучшего предложения.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <?= Html::img('@web/i/security-icon.png') ?>
                    <h5 class="card-title">Безопасно</h5>
                    <p class="card-text">Данные отправляются только в страховую, передача третьим лицам исключена.</p>
                </div>
            </div>
        </div>
    </div>
</div>
