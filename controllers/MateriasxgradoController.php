<?php

namespace app\controllers;

use app\models\Materiasxgrado;
use app\models\MateriasxgradoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MateriasxgradoController implements the CRUD actions for Materiasxgrado model.
 */
class MateriasxgradoController extends Controller
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
     * Lists all Materiasxgrado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MateriasxgradoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Materiasxgrado model.
     * @param int $mxg_id Mxg ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mxg_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mxg_id),
        ]);
    }

    /**
     * Creates a new Materiasxgrado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Materiasxgrado();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'mxg_id' => $model->mxg_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Materiasxgrado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $mxg_id Mxg ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mxg_id)
    {
        $model = $this->findModel($mxg_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mxg_id' => $model->mxg_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Materiasxgrado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $mxg_id Mxg ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mxg_id)
    {
        $this->findModel($mxg_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Materiasxgrado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $mxg_id Mxg ID
     * @return Materiasxgrado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mxg_id)
    {
        if (($model = Materiasxgrado::findOne($mxg_id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
