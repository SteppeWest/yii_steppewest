<?php
/**
 * @var $this yii\web\View
 * @var $searchModel common\models\<<Self>>Search
 * @var $dataProvider yii\data\ActiveDataProvider
 */

use yii\bootstrap4\Html;
use kartik\grid\GridView;

$this->title = '<<Self>>s';
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
	//['class' => 'yii\grid\SerialColumn'],
	[
		'attribute' => '<<self>>_id',
		'label' => 'ID',
		'width' => '50px',
	],
	[
		'attribute' => '<<parent>>_id',
		'label' => '<<Parent>>',
		'value' => function($model){
			return $model-><<parent>>->name;
		},
	],
	'name',
	'title',
	[
		'attribute' => 'hide',
		'width' => '50px',
		'value' => function($model){
			return $model->hide ? 'Yes' : 'No';
		},
	],
	[
		'class' => 'yii\grid\ActionColumn',
		'contentOptions' => ['nowrap'=>'nowrap'],
	],
];
?>
<div class="container <<self>>-index">

	<div class="row">
		<div class="col-sm-6">
			<h1>
				<?= Html::encode($this->title) ?>
				<small>List</small>
			</h1>
		</div>

		<div class="col-sm-6">
			<div class="float-right">
				<?= Html::a(
					'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
					['create'],
					['class' => 'btn btn-success']
				) ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<?= GridView::widget([
				'dataProvider' => $dataProvider,
				'columns' => $gridColumns,
				'pager' => [
					'class' => yii\widgets\LinkPager::className(),
					'pagination' => ['pageSize' => -1],
				],
			]) ?>
		</div>
	</div>

</div>

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

