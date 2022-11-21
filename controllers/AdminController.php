<?php

namespace yukzanaly\modules\schedulepost\controllers;

use humhub\modules\admin\components\Controller;

use Yii;
use yii\helpers\Url;

use humhub\widgets\Button;

class AdminController extends Controller
{
 
    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

