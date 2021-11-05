<?php

namespace app\controllers;

use app\models\Materia;
use app\models\MateriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MateriaController implements the CRUD actions for Materia model.
 */
class MateriaController extends Controller
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
     * Lists all Materia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MateriaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Materia model.
     * @param int $mat_id Mat ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mat_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mat_id),
        ]);
    }

    /**
     * Creates a new Materia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Materia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'mat_id' => $model->mat_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Materia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $mat_id Mat ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mat_id)
    {
        $model = $this->findModel($mat_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mat_id' => $model->mat_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Materia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $mat_id Mat ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mat_id)
    {
        $this->findModel($mat_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Materia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $mat_id Mat ID
     * @return Materia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mat_id)
    {
        if (($model = Materia::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
