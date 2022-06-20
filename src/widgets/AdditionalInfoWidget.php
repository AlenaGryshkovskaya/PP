<?php

namespace app\widgets;

use app\models\ContactForm;
use yii\base\Widget;

class AdditionalInfoWidget extends Widget
{
    public string $type = '';

    const CAR_INSURANCE_VIEW = 'additional-info-car-insurance';
    const MORTGAGE_VIEW = 'additional-info-mortgage';

    public function run()
    {
        $view = match ($this->type) {
            'car-insurance' => self::CAR_INSURANCE_VIEW,
            'mortgage' => self::MORTGAGE_VIEW ,
            default => 'additional-info-main',
        };

        return $this->render($view);
    }
}
