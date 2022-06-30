<?php

namespace frontend\controllers;

use yii;
use frontend\models\FreeFire;
use frontend\models\FreeFireSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FreeFireController implements the CRUD actions for FreeFire model.
 */
class FreeFireController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['index', 'create'],
                    'rules' => [
                        [
                            'actions' => ['index', 'create'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all FreeFire models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FreeFireSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FreeFire model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FreeFire model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FreeFire();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = UploadedFile::getInstance($model, 'image');

                $model->transaction_invoice = $image->name;

                $model->save();

                $image->saveAs(Yii::$app->basePath . '/web/uploaduser/freefire/' . $image->name);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FreeFire model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $oldimg = $model->transaction_invoice;
            if ($oldimg != "") {
                unlink(Yii::$app->basePath . '/web/uploaduser/freefire/' . $oldimg);
            }

            $image = UploadedFile::getInstance($model, 'image');

            $model->transaction_invoice = $image->name;

            $model->save();

            $image->saveAs(Yii::$app->basePath . '/web/uploaduser/freefire/' . $image->name);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FreeFire model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        unlink(Yii::$app->basePath . '/web/uploaduser/freefire/' . $model->transaction_invoice);

        $model->delete();

        return $this->redirect(['zerostore/index']);
    }

    /**
     * Finds the FreeFire model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return FreeFire the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FreeFire::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
