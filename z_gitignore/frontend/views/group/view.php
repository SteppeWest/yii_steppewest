<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Group
 */

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

$this->title = 'Group: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$detailAttributes = [
	'group_id',
	[
		'attribute' => 'category_id',
		'label' => 'Category',
		'value' => $model->category->name,
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
		'attribute' => 'subgroup_id',
		'label' => 'ID',
		'width' => '75px',
	],
	'name',
	'title',
	'hide',
];
?>
<div class="container group-view">

	<div class="row">
		<div class="col-sm-6">
			<h1>
				Group: <small>
					<?= Html::encode($model->title) ?>
				</small>
			</h1>
		</div>

		<div class="col-sm-6 crud-navigation">
			<div class="float-right">
				<?= Html::a(
					'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
					[ 'update', 'id' => $model->group_id],
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

			<?php if($providerSubgroup->totalCount){
				echo Gridview::widget([
					'dataProvider' => $providerSubgroup,
					'columns' => $gridColumns,
					'panel' => [
						'heading' => '<span class="glyphicon glyphicon-book"></span> '
							. Html::encode('Subgroup'),
					],
				]);
			} ?>
		</div>
	</div>

</div>
