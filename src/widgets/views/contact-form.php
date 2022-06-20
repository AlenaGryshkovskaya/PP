<?php

/** @var $model ContactForm */

use app\models\ContactForm;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput; ?>

<div class="row flex-column">

    <div class="col-md-5 col-sm-12">

        <?= Html::tag('h4', 'Есть вопрос?', ['class' => 'contact-title']) ?>

        <?= Html::tag('p', 'Оставьте заявку, и мы свяжемся с вами в ближайшее время.', ['class' => 'contact-text']) ?>

        <?php $form = ActiveForm::begin([
            'id' => "contact-form",
            'action' => ['site/feedback'],
            'options' => [
                'class' => "contact-form",
            ],
            'fieldConfig' => function (ContactForm $model, $attribute) {
                return [
                    'inputOptions' => [
                        'class' => 'form-control',
                        'placeholder' => $model->getAttributeLabel($attribute),
                    ],
                    'errorOptions' => [
                        'class' => 'invalid-feedback d-block',
                    ],
                    'template' => "{input}",
                ];
            },
        ]) ?>

            <?= $form->field($model, 'name') ?>

            <?= $form->field($model, 'phone')->widget(
                MaskedInput::class,
                ['mask' => '+7 (999) 999-99-99', 'options' => ['id' => "field-mask"]]
            ) ?>

            <?= $form->field($model, 'email') ?>

            <?= Html::submitButton('Оставить заявку') ?>

        <?php ActiveForm::end() ?>

        <?= Html::a('Задать вопрос в Telegram', '#', ['class' => 'contact-tg-link', 'target' => '_blank']) ?>

    </div>

</div>

