<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $phone;
    public $email;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
            ['phone', 'filter', 'filter' => function ($value) {
                return self::stripPhone($value);
            }],
            [
                'email',
                'email',
                'message' => 'Адрес электронной почты введен неверно.',
                'enableIDN' => true
            ],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Электронная почта',
        ];
    }

    /**
     * @param $phone
     * @return string
     */
    public static function stripPhone($phone)
    {
        return strtr($phone, [
            '(' => '',
            ')' => '',
            '-' => '',
            ' ' => '',
            '+' => '',
            '_' => '',
        ]);
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact()
    {
        $title = 'Отклик на вакансию';
        $body = $this->getAttributeLabel('name') . ': ' . $this->name . PHP_EOL .
            $this->getAttributeLabel('phone') . ': ' . $this->phone . PHP_EOL .

        $mailer = Yii::$app->mailer->compose()
            ->setTo($this->email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($title)
            ->setTextBody($body);

        if ($mailer->send()) {
            return true;
        }

        return false;
    }
}
