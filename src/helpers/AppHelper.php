<?php

namespace app\helpers;

use Yii;

class AppHelper
{
    public static function powered()
    {
        return Yii::t('yii', '&copy; {technology} {year}', [
            'technology' => '<a href="https://ooo.technology/" rel="external">' . Yii::t(
                'app',
                'Technology'
            ) . '</a>',
            'year' => date('Y'),
        ]);
    }
}
