<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Link
 */

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

$this->title = 'Link: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$detailAttributes = [
	'link_id',
	[
		'attribute' => 'subgroup_id',
		'label' => 'Subgroup',
		'value' => $model->subgroup->name,
	],
	'name',
	[
		'attribute' => 'fullLink',
		'format' => 'raw',
	],
	[
		'attribute' => 'https',
		'width' => '50px',
		'value' => $model->https ? 'Yes' : 'No',
	],
	[
		'attribute' => 'hide',
		'width' => '50px',
		'value' => $model->hide ? 'Yes' : 'No',
	],
];
?>
<div class="container link-view">

	<div class="row">
		<div class="col-sm-6">
			<h1>
				Link: <small>
					<?= Html::encode($model->title) ?>
				</small>
			</h1>
		</div>

		<div class="col-sm-6 crud-navigation">
			<div class="float-right">
				<?= Html::a(
					'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
					[ 'update', 'id' => $model->link_id],
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

	<p>
		<?= Html::a('Delete', ['delete', 'id' => $model->link_id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) ?>
	</p>

		</div>
	</div>

</div>
