<?php

namespace app\controllers\site;

use app\models\Category;
use app\models\Product;
use app\models\Article;


class MainController extends BaseController
{

    public function actionIndex()
    {
        $products = Product::find()->with('images')->where(['popular' => Product::POPULAR_ID])->all();

        $articles = Article::find()->orderBy(['date' => SORT_DESC])->limit(3)->all();
        // dd($products[0]->images); 
        // dd($products);
        // dd($articles);
        return $this->render('index', ['products' => $products, 'articles' => $articles]);
    }


}
