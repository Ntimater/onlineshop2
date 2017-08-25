<?php

namespace backend\controllers;

use Yii;
use app\models\Itemes;
use app\models\ItemesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Shops;


/**
 * ItemesController implements the CRUD actions for Itemes model.
 */
class ItemesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        'access' => [
            'class' => \yii\filters\AccessControl::className(),
            'only' => ['create', 'update','delete','index','view'],
            'rules' => [
                // deny all POST requests
                [
                    'allow' => true,
                    'verbs' => ['POST']
                  
                    
                ],
                [
                    'allow' => true,
                    'actions' => ['index','view'],
                    'roles' => ['?'],
                    
                ],
                // allow authenticated users
                [
                   'allow' => true,
                    'actions' => ['create', 'update','delete','index','view'],
                    'roles' => ['@'],
                ],
                // everything else is denied
            ],
        ],


            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Itemes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        

           return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
        ]);
    }

    /**
     * Displays a single Itemes model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Itemes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Itemes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IdItem]);
        } else {
            $shops = Shops::find()->all();

            return $this->render('create', [
                'model' => $model,
                'shops' => $shops
            ]);
        }
    }

    /**
     * Updates an existing Itemes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IdItem]);
        } else {
        	 $shops = Shops::find()->all();
            return $this->render('update', [
                'model' => $model,
                'shops' => $shops
            ]);
        }
    }

    /**
     * Deletes an existing Itemes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Itemes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Itemes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Itemes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
