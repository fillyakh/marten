<?php

namespace app\controllers\site;

use app\models\Category;

class BaseController extends \yii\web\Controller
{
    public $layout = 'public';

    public function render($view, $params = [])
    {
        $this->view->params['categories'] = Category::find()->where(['parent_id' => Category::MAIN_PARENT])->with('children')->all();
        return parent::render($view, $params);
    }

}
