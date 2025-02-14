<?php

namespace app\controllers;

class MainController extends \yii\web\Controller
{
    public $layout = 'public';
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
