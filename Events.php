<?php

namespace  yukzanaly\modules\schedulepost;

use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Schedule Post',
            'url' => Url::to(['/schedulepost/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-calendar-o"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'schedulepost' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }
}
