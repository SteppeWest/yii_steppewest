<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubgroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\bootstrap4\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Subgroup';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="subgroup-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]) ?>

	<p>
		<?= Html::a('Create Subgroup', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
	</p>
	<div class="search-form" style="display:none">
		<?=  $this->render('_search', ['model' => $searchModel]) ?>
	</div>
	<?php
	$gridColumn = [
		['class' => 'yii\grid\SerialColumn'],
		'subgroup_id',
		[
				'attribute' => 'group_id',
				'label' => 'Group',
				'value' => function($model){
					return $model->group->name;
				},
				'filterType' => GridView::FILTER_SELECT2,
				'filter' => \yii\helpers\ArrayHelper::map(\common\models\Group::find()->asArray()->all(), 'group_id', 'name'),
				'filterWidgetOptions' => [
					'pluginOptions' => ['allowClear' => true],
				],
				'filterInputOptions' => ['placeholder' => 'P2m group', 'id' => 'grid-subgroup-search-group_id']
			],
		'name',
		'title',
		'hide',
		[
			'class' => 'yii\grid\ActionColumn',
		],
	];
	?>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => $gridColumn,
		'pjax' => true,
		'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-subgroup']],
		'panel' => [
			'type' => GridView::TYPE_PRIMARY,
			'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
		],
		'export' => false,
		// your toolbar can include the additional full export menu
		'toolbar' => [
			'{export}',
			ExportMenu::widget([
				'dataProvider' => $dataProvider,
				'columns' => $gridColumn,
				'target' => ExportMenu::TARGET_BLANK,
				'fontAwesome' => true,
				'dropdownOptions' => [
					'label' => 'Full',
					'class' => 'btn btn-default',
					'itemsBefore' => [
						'<li class="dropdown-header">Export All Data</li>',
					],
				],
				'exportConfig' => [
					ExportMenu::FORMAT_PDF => false
				]
			]) ,
		],
	]) ?>

</div>
