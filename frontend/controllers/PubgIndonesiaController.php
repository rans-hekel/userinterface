<?php

namespace frontend\controllers;

use yii;
use frontend\models\PubgIndonesia;
use frontend\models\PubgIndonesiaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * PubgIndonesiaController implements the CRUD actions for PubgIndonesia model.
 */
class PubgIndonesiaController extends Controller
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
     * Lists all PubgIndonesia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PubgIndonesiaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PubgIndonesia model.
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
     * Creates a new PubgIndonesia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PubgIndonesia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = UploadedFile::getInstance($model, 'image');

                $model->transaction_invoice = $image->name;

                $model->save();

                $image->saveAs(Yii::$app->basePath . '/web/uploaduser/pubg/' . $image->name);
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
     * Updates an existing PubgIndonesia model.
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
                unlink(Yii::$app->basePath . '/web/uploaduser/pubg/' . $oldimg);
            }

            $image = UploadedFile::getInstance($model, 'image');

            $model->transaction_invoice = $image->name;

            $model->save();

            $image->saveAs(Yii::$app->basePath . '/web/uploaduser/pubg/' . $image->name);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PubgIndonesia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        unlink(Yii::$app->basePath . '/web/uploaduser/pubg/' . $model->transaction_invoice);

        $model->delete();

        return $this->redirect(['zerostore/index']);
    }

    /**
     * Finds the PubgIndonesia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return PubgIndonesia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PubgIndonesia::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
