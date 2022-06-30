<?php

namespace frontend\controllers;

use yii;
use frontend\models\MobileLegends;
use frontend\models\MobileLegendsSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MobileLegendsController implements the CRUD actions for MobileLegends model.
 */
class MobileLegendsController extends Controller
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
     * Lists all MobileLegends models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MobileLegendsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MobileLegends model.
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
     * Creates a new MobileLegends model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MobileLegends();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = UploadedFile::getInstance($model, 'image');

                $model->transaction_invoice = $image->name;

                $model->save();

                $image->saveAs(Yii::$app->basePath . '/web/uploaduser/mobilelegends/' . $image->name);
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
     * Updates an existing MobileLegends model.
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
                unlink(Yii::$app->basePath . '/web/uploaduser/mobilelegends/' . $oldimg);
            }

            $image = UploadedFile::getInstance($model, 'image');

            $model->transaction_invoice = $image->name;

            $model->save();

            $image->saveAs(Yii::$app->basePath . '/web/uploaduser/mobilelegends/' . $image->name);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MobileLegends model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        unlink(Yii::$app->basePath . '/web/uploaduser/mobilelegends/' . $model->transaction_invoice);

        $model->delete();

        return $this->redirect(['zerostore/index']);
    }

    /**
     * Finds the MobileLegends model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return MobileLegends the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MobileLegends::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
