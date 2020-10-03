<?php

use yii\bootstrap4\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php Pjax::begin() ?>
	<?php // echo $this->render('_search', ['model' => $searchModel]) ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'category_id',
			'name',
			'title',
			'hide',

			['class' => 'yii\grid\ActionColumn'],
		],
	]) ?>

	<?php Pjax::end() ?>

</div>

<!-- /*
			[
				'class' => 'yii\grid\ActionColumn',
				'template' => '{view} {update} {images} {delete}',
				'buttons' => [
					'images' => function ($url, $model, $key) {
						// <--- here you can override or create template for a button of a given name
						return Html::a(
							'<span class="glyphicon glyphicon glyphicon-picture" aria-hidden="true"></span>',
							Url::to(['image/index',
							'id' => $model->category_id])
						);
					}
				],
			],
*/ -->
