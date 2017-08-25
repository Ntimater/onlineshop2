<?php

namespace backend\controllers;

use Yii;
use app\models\Itemes;
use app\models\ItemesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Shops;

class ItemListController extends Controller
{
	Public function actionIndex()
	{
		$shops=Shops::find()->all();
		$itemes=Itemes::find()->all();
		return $this ->render ('index',[
			'shops'=>$shops,
			'itemes'=>$itemes
		]
			
		);
	}

}
