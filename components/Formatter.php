<?php

namespace common\components;

use Yii;
use DateInterval;
use DateTime;
use DateTimeZone;

class Formatter extends \yii\i18n\Formatter {

    public function asRelativeTime($value, $referenceTime = null) {

        if ($value === null) {
            return $this->nullDisplay;
        }

        if ($value instanceof DateInterval) {
            $interval = $value;
        } else {
            $timestamp = $this->normalizeDatetimeValue($value);

            if ($timestamp === false) {
                // $value is not a valid date/time value, so we try
                // to create a DateInterval with it
                try {
                    $interval = new DateInterval($value);
                } catch (\Exception $e) {
                    // invalid date/time and invalid interval
                    return $this->nullDisplay;
                }
            } else {
                $timeZone = new DateTimeZone($this->timeZone);

                if ($referenceTime === null) {
                    $dateNow = new DateTime('now', $timeZone);
                } else {
                    $dateNow = $this->normalizeDatetimeValue($referenceTime);
                    $dateNow->setTimezone($timeZone);
                }

                $dateThen = $timestamp->setTimezone($timeZone);

                $interval = $dateThen->diff($dateNow);
            }
        }

        if ($interval->invert) {
            if ($interval->y >= 1) {
                return Yii::t('app', 'in {delta, plural, =1{a year} other{# years}}', ['delta' => $interval->y], $this->locale);
            }
            if ($interval->m >= 1) {
                return Yii::t('app', 'in {delta, plural, =1{a month} other{# months}}', ['delta' => $interval->m], $this->locale);
            }
            if ($interval->d >= 1) {
                return Yii::t('app', 'in {delta, plural, =1{a day} other{# days}}', ['delta' => $interval->d], $this->locale);
            }
            if ($interval->h >= 1) {
                return Yii::t('app', 'in {delta, plural, =1{an hour} other{# hours}}', ['delta' => $interval->h], $this->locale);
            }
            if ($interval->i >= 1) {
                return Yii::t('app', 'in {delta, plural, =1{a minute} other{# minutes}}', ['delta' => $interval->i], $this->locale);
            }
            if ($interval->s == 0) {
                return Yii::t('app', 'just now', [], $this->locale);
            }

            return Yii::t('app', 'in {delta, plural, =1{a second} other{# seconds}}', ['delta' => $interval->s], $this->locale);
        }

        if ($interval->y >= 1) {
            return Yii::t('app', '{delta, plural, =1{a year} other{# years}} ago', ['delta' => $interval->y], $this->locale);
        }
        if ($interval->m >= 1) {
            return Yii::t('app', '{delta, plural, =1{a month} other{# months}} ago', ['delta' => $interval->m], $this->locale);
        }
        if ($interval->d >= 1) {
            return Yii::t('app', '{delta, plural, =1{a day} other{# days}} ago', ['delta' => $interval->d], $this->locale);
        }
        if ($interval->h >= 1) {
            return Yii::t('app', '{delta, plural, =1{an hour} other{# hours}} ago', ['delta' => $interval->h], $this->locale);
        }
        if ($interval->i >= 1) {
            return Yii::t('app', '{delta, plural, =1{a minute} other{# minutes}} ago', ['delta' => $interval->i], $this->locale);
        }
        if ($interval->s == 0) {
            return Yii::t('app', 'just now', [], $this->locale);
        }

        return Yii::t('app', '{delta, plural, =1{a second} other{# seconds}} ago', ['delta' => $interval->s], $this->locale);
    }
}