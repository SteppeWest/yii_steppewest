<?php

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Category', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

	<div class="row">
		<div class="col-sm-9">
			<h2><?= 'Category'.' '. Html::encode($this->title) ?></h2>
		</div>
		<div class="col-sm-3" style="margin-top: 15px">
			
			<?= Html::a('Update', ['update', 'id' => $model->category_id], ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Delete', ['delete', 'id' => $model->category_id], [
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
	$gridColumn = [
		'category_id',
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
	
	<div class="row">
<?php
if($providerGroup->totalCount){
	$gridColumnGroup = [
		['class' => 'yii\grid\SerialColumn'],
			'group_id',
						'name',
			'title',
			'hide',
	];
	echo Gridview::widget([
		'dataProvider' => $providerGroup,
		'pjax' => true,
		'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-p2m-group']],
		'panel' => [
		'type' => GridView::TYPE_PRIMARY,
		'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Group'),
		],
		'columns' => $gridColumnGroup
	]);
}
?>
	</div>
</div>