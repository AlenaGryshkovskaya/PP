<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public string $headerTitle = 'Страховые услуги онлайн';

    public string $headerText = 'Рассчитайте стоимость страхования и выберите подходящий вариант.';

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays CarInsurance.
     *
     * @return string
     */
    public function actionCarInsurance()
    {
        $this->headerTitle = 'Калькулятор стоимости ОСАГО';
        $this->headerText = 'Все официально, полис сразу появится в базе Российского союза автостраховщиков.';

        return $this->render('car-insurance');
    }

    /**
     * Displays Mortgage.
     *
     * @return string
     */
    public function actionMortgage()
    {
        $this->headerTitle = 'Страхование ипотеки';
        $this->headerText = 'Страховые аккредитованы, банк точно примет полис.';

        return $this->render('mortgage');
    }
}
