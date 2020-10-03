<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Category
 */

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

$this->title = 'Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

p2m\assets\P2CoreAsset::register($this);
frontend\assets\MasonryAsset::register($this);

$detailAttributes = [
	'category_id',
	'name',
	'title',
	[
		'attribute' => 'hide',
		'width' => '75px',
		'value' => $model->hide ? 'Yes' : 'No',
	],
];

$gridColumns = [
	//['class' => 'yii\grid\SerialColumn'],
	[
		'attribute' => 'group_id',
		'label' => 'ID',
		'width' => '75px',
	],
	'name',
	'title',
	'hide',
];
?>
<div class="container category-view">

	<div class="row">
		<div class="col-sm-12">
			<h2>P2 Portal: <small>
				<?= Html::encode($model->title) ?>
			</small></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<?= \frontend\widgets\PortalGrid::widget([
				'dataProvider' => $providerGroup
			]) ?>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-sm-6">
			<h1>
				Category: <small>
					<?= Html::encode($model->title) ?>
				</small>
			</h1>
		</div>

		<div class="col-sm-6 crud-navigation">
			<div class="float-right">
				<?= Html::a(
					'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
					[ 'update', 'id' => $model->category_id],
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

		<div class="col-sm-6">
			<?php if($providerGroup->totalCount){
				echo Gridview::widget([
					'dataProvider' => $providerGroup,
					'columns' => $gridColumns,
					'panel' => [
						'heading' => '<span class="glyphicon glyphicon-book"></span> '
							. Html::encode('Group'),
					],
				]);
			} ?>
		</div>
	</div>

</div>
