<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Subgroup
 */

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

$this->title = 'Subgroup: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Subgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$detailAttributes = [
	'subgroup_id',
	[
		'attribute' => 'group_id',
		'label' => 'Group',
		'value' => $model->group->name,
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
		'attribute' => 'link_id',
		'label' => 'ID',
		'width' => '75px',
	],
	'name',
	//'link',
	[
		'attribute' => 'fullLink',
		'format' => 'raw',
	],
	'hide',
];
?>
<div class="container subgroup-view">

	<div class="row">
		<div class="col-sm-6">
			<h1>
				Subgroup: <small>
					<?= Html::encode($model->title) ?>
				</small>
			</h1>
		</div>

		<div class="col-sm-6 crud-navigation">
			<div class="float-right">
				<?= Html::a(
					'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
					[ 'update', 'id' => $model->subgroup_id],
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

			<?php if($providerLink->totalCount){
				echo Gridview::widget([
					'dataProvider' => $providerLink,
					'columns' => $gridColumns,
					'panel' => [
						'heading' => '<span class="glyphicon glyphicon-book"></span> '
							. Html::encode('Link'),
					],
				]);
			} ?>
		</div>

		<div class="col-sm-3">
			<hr>

			<?php if($providerLink->totalCount){
				echo Gridview::widget([
					'dataProvider' => $providerLink,
					'columns' => [
						['attribute' => 'fullLink', 'format' => 'raw'],
					],
				]);
			} ?>
		</div>
	</div>

</div>
