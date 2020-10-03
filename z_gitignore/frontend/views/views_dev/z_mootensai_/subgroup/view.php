<?php

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Subgroup */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Subgroup', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
	'subgroup_id',
	[
		'attribute' => 'group.name',
		'label' => 'Group',
	],
	'name',
	'title',
	'hide',
];

$linkGridColumns = [
	[
		'attribute' => 'fullLink',
		'format'=>'raw',
	],
];
?>
<div class="subgroup-view">

	<div class="row">
		<div class="col-sm-9">
			<h2><?= 'Subgroup'.' '. Html::encode($this->title) ?></h2>
		</div>
		<div class="col-sm-3" style="margin-top: 15px">

			<?= Html::a('Update', ['update', 'id' => $model->subgroup_id], ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Delete', ['delete', 'id' => $model->subgroup_id], [
				'class' => 'btn btn-danger',
				'data' => [
					'confirm' => 'Are you sure you want to delete this item?',
					'method' => 'post',
				],
			])
			?>
		</div>
	</div>

	<div class="row">
<?php
	echo DetailView::widget([
		'model' => $model,
		'attributes' => $gridColumns
	]);
?>
	</div>

	<div class="row">
<?php
if($providerLink->totalCount){
	echo Gridview::widget([
		'dataProvider' => $providerLink,
		'pjax' => true,
		'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-p2m-link']],
		'panel' => [
			'type' => GridView::TYPE_PRIMARY,
			'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Link'),
		],
		'columns' => $linkGridColumns
	]);
}
?>
	</div>
</div>
