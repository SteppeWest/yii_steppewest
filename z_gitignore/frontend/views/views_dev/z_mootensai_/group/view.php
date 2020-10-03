<?php

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Group */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Group', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-view">

	<div class="row">
		<div class="col-sm-9">
			<h2><?= Html::encode($this->title) ?></h2>
		</div>
		<div class="col-sm-3" style="margin-top: 15px">

			<?= Html::a('Update', ['update', 'id' => $model->group_id], ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Delete', ['delete', 'id' => $model->group_id], [
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
		<div class="col-sm-3">
<?php
	$gridColumn = [
		'group_id',
		[
			'attribute' => 'category.name',
			'label' => 'Category',
		],
		'name',
		'title',
		'hide',
	];
	echo DetailView::widget([
		'model' => $model,
		'attributes' => $gridColumn
	]);
?>
		</div>
		<div class="col-sm-3">
			<div class="card">
				<h5 class="card-header text-white bg-primary">
					<?= Html::encode($this->title) ?>
				</h5>
				<div class="card-body">
<?php
if($providerSubgroup->totalCount){
	$gridColumnSubgroup = [
		['class' => 'yii\grid\SerialColumn'],
			'subgroup_id',
			'name',
			'title',
			'hide',
	];
	echo Gridview::widget([
		'dataProvider' => $providerSubgroup,
		'pjax' => true,
		'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-p2m-subgroup']],
		'panel' => [
		'type' => GridView::TYPE_PRIMARY,
		'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Subgroup'),
		],
		'columns' => $gridColumnSubgroup
	]);
}
?>
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6"></div>
	</div>


	<div class="row">
	</div>





	<div class="row">
<?php
if($providerSubgroup->totalCount){
	$gridColumnSubgroup = [
		['class' => 'yii\grid\SerialColumn'],
			'subgroup_id',
						'name',
			'title',
			'hide',
	];
	echo Gridview::widget([
		'dataProvider' => $providerSubgroup,
		'pjax' => true,
		'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-p2m-subgroup']],
		'panel' => [
		'type' => GridView::TYPE_PRIMARY,
		'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Subgroup'),
		],
		'columns' => $gridColumnSubgroup
	]);
}
?>
	</div>
</div>
