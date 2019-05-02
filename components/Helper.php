<?php

namespace common\components;

use Yii;

class Helper {

    public static function asRelativeTime($value) {

        $diff = date_diff(date_create($value), date_create(Yii::$app->formatter->asDate(time())));

        if ($diff->format("%a") > '30') {
            Yii::$app->formatter->timeZone = 'Asia/Jakarta';
            $date = Yii::$app->formatter->asDate($value, 'medium');
            Yii::$app->formatter->timeZone = 'UTC';
            return $date;
        } else {
            return Yii::$app->formatter->asRelativeTime($value);
        }
    }
}

