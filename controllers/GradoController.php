<?php

namespace app\controllers;

use app\models\Grado;
use app\models\GradoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GradoController implements the CRUD actions for Grado model.
 */
class GradoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
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
     * Lists all Grado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GradoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Grado model.
     * @param int $grd_id Grd ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($grd_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($grd_id),
        ]);
    }

    /**
     * Creates a new Grado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Grado();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'grd_id' => $model->grd_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Grado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $grd_id Grd ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($grd_id)
    {
        $model = $this->findModel($grd_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'grd_id' => $model->grd_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Grado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $grd_id Grd ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($grd_id)
    {
        $this->findModel($grd_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Grado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $grd_id Grd ID
     * @return Grado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($grd_id)
    {
        if (($model = Grado::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
