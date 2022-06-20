<?php

namespace app\widgets;

use app\models\ContactForm;
use yii\base\Widget;

class ContactFormWidget extends Widget
{
    public function run()
    {
        return $this->render('contact-form', ['model' => new ContactForm]);
    }
}
