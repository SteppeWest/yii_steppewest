<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\<<Self>>
 */

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

$this->title = '<<Self>>: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '<<Self>>s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$detailAttributes = [
	'<<self>>_id',
	[
		'attribute' => '<<parent>>_id',
		'label' => '<<Parent>>',
		'value' => $model-><<parent>>->name,
	],
	'name',
	'title',
	[
		'attribute' => 'hide',
		'width' => '50px',
		'value' => $model->hide ? 'Yes' : 'No',
	],
];

$gridColumns = [
	//['class' => 'yii\grid\SerialColumn'],
	[
		'attribute' => '<<child>>_id',
		'label' => 'ID',
		'width' => '75px',
	],
	'name',
	'title',
	'hide',
];
?>
<div class="container <<self>>-view">

	<div class="row">
		<div class="col-sm-6">
			<h1>
				<<Self>>: <small>
					<?= Html::encode($model->title) ?>
				</small>
			</h1>
		</div>

		<div class="col-sm-6 crud-navigation">
			<div class="float-right">
				<?= Html::a(
					'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
					[ 'update', 'id' => $model-><<self>>_id],
					['class' => 'btn btn-info']
				) ?>

				<?= Html::a(
					'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
					['create'],
					['class' => 'btn btn-success']
				) ?>

				<?= Html::a(
					'<span class="glyphicon glyphicon-list"></span> ' . 'Full list',
					['index'],
					['class'=>'btn btn-default']
				) ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<?= DetailView::widget([
				'model' => $model,
				'attributes' => $detailAttributes,
				'labelColOptions' => ['style' => 'width: 25%']
			]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<hr>

			<?php if($provider<<Child>>->totalCount){
				echo Gridview::widget([
					'dataProvider' => $provider<<Child>>,
					'columns' => $gridColumns,
					'panel' => [
						'heading' => '<span class="glyphicon glyphicon-book"></span> '
							. Html::encode('<<Child>>'),
					],
				]);
			} ?>
		</div>
	</div>

</div>

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

