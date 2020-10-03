<?php

namespace frontend\controllers;

use Yii;
use common\models\Subgroup;
use common\models\SubgroupSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubgroupController implements the CRUD actions for Subgroup model.
 */
class SubgroupController extends Controller
{
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['post'],
				],
			],
		];
	}

	/**
	 * Lists all Subgroup models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new SubgroupSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Subgroup model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		$model = $this->findModel($id);
		$providerLink = new \yii\data\ArrayDataProvider([
			'allModels' => $model->links,
		]);
		return $this->render('view', [
			'model' => $this->findModel($id),
			'providerLink' => $providerLink,
		]);
	}

	/**
	 * Creates a new Subgroup model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new Subgroup();

		if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
			return $this->redirect(['view', 'id' => $model->subgroup_id]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing Subgroup model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
			return $this->redirect(['view', 'id' => $model->subgroup_id]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing Subgroup model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{
		$this->findModel($id)->deleteWithRelated();

		return $this->redirect(['index']);
	}


	/**
	 * Finds the Subgroup model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Subgroup the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Subgroup::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}

	/**
	* Action to load a tabular form grid
	* for Link
	* @author Yohanes Candrajaya <moo.tensai@gmail.com>
	* @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
	*
	* @return mixed
	*/
	public function actionAddLink()
	{
		if (Yii::$app->request->isAjax) {
			$row = Yii::$app->request->post('Link');
			if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
				$row[] = [];
			return $this->renderAjax('_formLink', ['row' => $row]);
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
